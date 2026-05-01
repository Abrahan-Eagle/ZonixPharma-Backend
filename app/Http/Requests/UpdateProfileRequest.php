<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user() !== null;
    }

    public function rules(): array
    {
        return [
            'firstName' => ['required', 'string', 'max:255'],
            'middleName' => ['nullable', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'secondLastName' => ['nullable', 'string', 'max:255'],
            'photo_users' => ['nullable', 'image', 'mimes:jpeg,png,jpg', 'max:5120'],
            'date_of_birth' => ['nullable', 'date'],
            'maritalStatus' => ['required', 'in:married,divorced,single'],
            'sex' => ['required', 'in:F,M'],
        ];
    }
}
