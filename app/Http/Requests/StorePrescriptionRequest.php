<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Validator;

class StorePrescriptionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user() !== null;
    }

    public function rules(): array
    {
        return [
            'order_id' => ['required', 'integer', 'exists:orders,id'],
            'prescribing_doctor_name' => ['required', 'string', 'max:160'],
            'prescribing_doctor_license' => ['nullable', 'string', 'max:64'],
            'prescribing_doctor_specialty' => ['nullable', 'string', 'max:120'],
            'issued_at' => ['nullable', 'date', 'before_or_equal:today'],
            'prescription_type' => ['nullable', 'in:common,retained,special'],
            'image' => [
                'required_without:image_url',
                'file',
                'mimes:jpg,jpeg,png,pdf',
                'max:5120',
            ],
            'image_url' => ['nullable', 'string', 'max:500'],
        ];
    }

    public function withValidator(Validator $validator): void
    {
        $validator->after(function (Validator $validator): void {
            $url = $this->input('image_url');
            if (! is_string($url) || $url === '') {
                return;
            }
            if (! str_starts_with($url, 'http://') && ! str_starts_with($url, 'https://')) {
                return;
            }
            $allowed = config('zonix.pharma.prescription_allowed_image_hosts', []);
            if ($allowed === []) {
                $validator->errors()->add('image_url', 'Las URLs externas de receta están deshabilitadas. Sube el archivo como multipart o configura ZONIX_PHARMA_PRESCRIPTION_IMAGE_HOSTS.');

                return;
            }
            $host = strtolower((string) (parse_url($url, PHP_URL_HOST) ?: ''));
            if ($host === '') {
                $validator->errors()->add('image_url', 'URL de imagen inválida.');

                return;
            }
            $normalized = array_map('strtolower', $allowed);
            if (! in_array($host, $normalized, true)) {
                $validator->errors()->add('image_url', 'El dominio de la URL no está en la lista permitida para recetas.');
            }
        });
    }
}
