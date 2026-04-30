<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
}
