<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

/**
 * Almacenamiento privado cifrado en disco `local` para adjuntos sensibles
 * (recetas, KYC, comprobantes de pago). Referencia opaca `secure:{ruta}` en BD.
 */
class PrivateFileStorageService
{
    public const PREFIX_SECURE = 'secure:';

    /** @var list<string> */
    private const ALLOWED_DIRECTORIES = [
        'prescriptions',
        'kyc_documents',
        'payment_proofs',
    ];

    public function storeFromUpload(UploadedFile $file, string $directory = 'prescriptions'): string
    {
        if (! in_array($directory, self::ALLOWED_DIRECTORIES, true)) {
            throw new \InvalidArgumentException("Directorio de almacenamiento no permitido: {$directory}");
        }

        $realPath = $file->getRealPath();
        if ($realPath === false) {
            throw new \RuntimeException('No se pudo leer el archivo.');
        }
        $bytes = @file_get_contents($realPath);
        if ($bytes === false) {
            throw new \RuntimeException('No se pudo leer el archivo.');
        }
        $encrypted = encrypt($bytes);
        $relative = $directory.'/'.Str::uuid()->toString().'.enc';
        Storage::disk('local')->put($relative, $encrypted);

        return self::PREFIX_SECURE.$relative;
    }

    public function deleteByReference(?string $reference): void
    {
        if ($reference === null || $reference === '') {
            return;
        }
        if (str_starts_with($reference, self::PREFIX_SECURE)) {
            $path = substr($reference, strlen(self::PREFIX_SECURE));
            Storage::disk('local')->delete($path);

            return;
        }
        if (str_starts_with($reference, 'http://') || str_starts_with($reference, 'https://')) {
            return;
        }
        $path = $this->normalizeLocalPath($reference);
        if ($path !== null) {
            Storage::disk('local')->delete($path);
        }
        $publicPath = $this->normalizePublicPath($reference);
        if ($publicPath !== null) {
            Storage::disk('public')->delete($publicPath);
        }
    }

    /**
     * @return array{binary: string, mime: string}
     */
    public function getBinaryForDownload(string $reference): array
    {
        if (str_starts_with($reference, self::PREFIX_SECURE)) {
            $path = substr($reference, strlen(self::PREFIX_SECURE));
            if (! Storage::disk('local')->exists($path)) {
                throw new \RuntimeException('Archivo no encontrado.');
            }
            $encrypted = Storage::disk('local')->get($path);
            $plain = decrypt($encrypted);

            return ['binary' => $plain, 'mime' => $this->mimeFromBytes($plain)];
        }
        $local = $this->normalizeLocalPath($reference);
        if ($local !== null && Storage::disk('local')->exists($local)) {
            $plain = Storage::disk('local')->get($local);
            if (str_ends_with($local, '.enc')) {
                $plain = decrypt($plain);
            }

            return ['binary' => $plain, 'mime' => $this->mimeFromBytes($plain)];
        }
        $public = $this->normalizePublicPath($reference);
        if ($public !== null && Storage::disk('public')->exists($public)) {
            $plain = Storage::disk('public')->get($public);

            return ['binary' => $plain, 'mime' => $this->mimeFromBytes($plain)];
        }

        throw new \RuntimeException('No se puede servir este adjunto.');
    }

    public function isSecureOrLegacyFile(string $reference): bool
    {
        if (str_starts_with($reference, self::PREFIX_SECURE)) {
            return true;
        }

        return $this->normalizeLocalPath($reference) !== null
            || $this->normalizePublicPath($reference) !== null;
    }

    private function normalizeLocalPath(string $reference): ?string
    {
        $trim = ltrim($reference, '/');
        foreach (self::ALLOWED_DIRECTORIES as $directory) {
            if (str_starts_with($trim, $directory.'/')) {
                return $trim;
            }
        }

        return null;
    }

    private function normalizePublicPath(string $reference): ?string
    {
        if (str_starts_with($reference, '/storage/')) {
            return ltrim(substr($reference, strlen('/storage/')), '/');
        }
        foreach (self::ALLOWED_DIRECTORIES as $directory) {
            if (str_starts_with($reference, $directory.'/')) {
                return $reference;
            }
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
