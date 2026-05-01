<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreDocumentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user() !== null;
    }

    public function rules(): array
    {
        $type = $this->input('type');

        $base = [
            'profile_id' => ['required'],
            'type' => ['required', Rule::in(['ci', 'rif'])],
            'issued_at' => ['nullable', 'date'],
            'expires_at' => ['nullable', 'date', 'after_or_equal:issued_at'],
            'front_image' => ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:5120'],
        ];

        if ($type === 'ci') {
            return array_merge($base, [
                'number_ci' => ['required', 'integer', 'digits_between:6,9'],
            ]);
        }
        if ($type === 'rif') {
            return array_merge($base, [
                'rif_number' => ['required', 'string', 'max:20', 'regex:/^[VEJGP]-?\d{8}-?\d$/'],
                'taxDomicile' => ['nullable', 'string'],
            ]);
        }

        return $base;
    }
}
