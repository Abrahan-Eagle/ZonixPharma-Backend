<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePharmacistProfileRequest extends FormRequest
{
    public function authorize(): bool
    {
        $user = $this->user();
        return $user !== null && $user->role === 'pharmacist';
    }

    public function rules(): array
    {
        return [
            'mpps_number' => ['required', 'string', 'max:32'],
            'college_license_number' => ['nullable', 'string', 'max:32'],
            'license_expires_at' => ['nullable', 'date', 'after:today'],
            'title_image' => [
                'nullable',
                'file',
                'mimes:jpg,jpeg,png,pdf',
                'max:5120',
            ],
            'notes' => ['nullable', 'string', 'max:500'],
        ];
    }

    public function messages(): array
    {
        return [
            'mpps_number.required' => 'El número MPPS es obligatorio para registrar un farmacéutico colegiado.',
            'license_expires_at.after' => 'La fecha de vencimiento de la licencia debe ser futura.',
        ];
    }
}
