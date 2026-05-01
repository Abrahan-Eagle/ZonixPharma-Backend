<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

/**
 * Almacenamiento de adjuntos de receta: cifrado en reposo (Laravel encrypt)
 * y referencia opaca `secure:{ruta}` en `prescriptions.image_url`.
 */
class PrescriptionFileStorageService
{
    public const PREFIX_SECURE = 'secure:';

    public function storeFromUpload(UploadedFile $file): string
    {
        $realPath = $file->getRealPath();
        if ($realPath === false) {
            throw new \RuntimeException('No se pudo leer el archivo de receta.');
        }
        $bytes = @file_get_contents($realPath);
        if ($bytes === false) {
            throw new \RuntimeException('No se pudo leer el archivo de receta.');
        }
        $encrypted = encrypt($bytes);
        $relative = 'prescriptions/'.Str::uuid()->toString().'.enc';
        Storage::disk('local')->put($relative, $encrypted);

        return self::PREFIX_SECURE.$relative;
    }

    /**
     * Elimina el blob local asociado a image_url (secure:, legado local o public/storage).
     */
    public function deleteByReference(?string $imageUrl): void
    {
        if ($imageUrl === null || $imageUrl === '') {
            return;
        }
        if (str_starts_with($imageUrl, self::PREFIX_SECURE)) {
            $path = substr($imageUrl, strlen(self::PREFIX_SECURE));
            Storage::disk('local')->delete($path);

            return;
        }
        if (str_starts_with($imageUrl, 'http://') || str_starts_with($imageUrl, 'https://')) {
            return;
        }
        $path = $this->normalizeLocalPath($imageUrl);
        if ($path !== null) {
            Storage::disk('local')->delete($path);
        }
        $publicPath = $this->normalizePublicPath($imageUrl);
        if ($publicPath !== null) {
            Storage::disk('public')->delete($publicPath);
        }
    }

    /**
     * @return array{binary: string, mime: string}
     */
    public function getBinaryForDownload(string $imageUrl): array
    {
        if (str_starts_with($imageUrl, self::PREFIX_SECURE)) {
            $path = substr($imageUrl, strlen(self::PREFIX_SECURE));
            if (! Storage::disk('local')->exists($path)) {
                throw new \RuntimeException('Archivo de receta no encontrado.');
            }
            $encrypted = Storage::disk('local')->get($path);
            $plain = decrypt($encrypted);

            return ['binary' => $plain, 'mime' => $this->mimeFromBytes($plain)];
        }
        $local = $this->normalizeLocalPath($imageUrl);
        if ($local !== null && Storage::disk('local')->exists($local)) {
            $plain = Storage::disk('local')->get($local);
            if (str_ends_with($local, '.enc')) {
                $plain = decrypt($plain);
            }

            return ['binary' => $plain, 'mime' => $this->mimeFromBytes($plain)];
        }
        $public = $this->normalizePublicPath($imageUrl);
        if ($public !== null && Storage::disk('public')->exists($public)) {
            $plain = Storage::disk('public')->get($public);

            return ['binary' => $plain, 'mime' => $this->mimeFromBytes($plain)];
        }

        throw new \RuntimeException('No se puede servir este adjunto de receta.');
    }

    public function isSecureOrLegacyFile(string $imageUrl): bool
    {
        if (str_starts_with($imageUrl, self::PREFIX_SECURE)) {
            return true;
        }

        return $this->normalizeLocalPath($imageUrl) !== null
            || $this->normalizePublicPath($imageUrl) !== null;
    }

    private function normalizeLocalPath(string $imageUrl): ?string
    {
        $trim = ltrim($imageUrl);
        if (str_starts_with($trim, 'prescriptions/')) {
            return $trim;
        }

        return null;
    }

    private function normalizePublicPath(string $imageUrl): ?string
    {
        if (str_starts_with($imageUrl, '/storage/')) {
            return ltrim(substr($imageUrl, strlen('/storage/')), '/');
        }

        return null;
    }

    private function mimeFromBytes(string $binary): string
    {
        if (str_starts_with($binary, '%PDF')) {
            return 'application/pdf';
        }
        if (strlen($binary) >= 3 && $binary[0] === "\xff" && $binary[1] === "\xd8" && $binary[2] === "\xff") {
            return 'image/jpeg';
        }
        if (str_starts_with($binary, "\x89PNG\r\n\x1a\n")) {
            return 'image/png';
        }

        return 'application/octet-stream';
    }
}
