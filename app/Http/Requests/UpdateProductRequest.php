<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProductRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth()->check() && auth()->user()->role === 'commerce';
    }

    public function rules(): array
    {
        return [
            'name' => 'sometimes|required|string|max:255',
            'description' => 'sometimes|required|string|max:1000',
            'price' => 'sometimes|required|numeric|min:0|max:999999.99',
            'available' => 'sometimes|boolean',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
            'stock' => 'nullable|integer|min:0',
            'category' => 'nullable|string|max:100',
            'category_id' => 'nullable|integer|exists:categories,id',

            // Identificación farmacéutica
            'active_ingredient' => 'nullable|string|max:160',
            'dosage_form' => [
                'nullable',
                Rule::in([
                    'tablet', 'capsule', 'syrup', 'suspension', 'injection',
                    'cream', 'ointment', 'gel', 'drops', 'patch',
                    'suppository', 'inhaler', 'powder', 'solution', 'spray',
                    'device', 'other',
                ]),
            ],
            'concentration' => 'nullable|string|max:80',
            'presentation' => 'nullable|string|max:160',
            'manufacturer' => 'nullable|string|max:160',
            'health_registry' => 'nullable|string|max:80',
            'barcode' => 'nullable|string|max:32',
            'atc_code' => 'nullable|string|max:16',
            'requires_prescription' => 'sometimes|boolean',
            'prescription_type' => [
                'nullable',
                'required_if:requires_prescription,1',
                'required_if:requires_prescription,true',
                Rule::in(['common', 'retained', 'special']),
            ],
            'controlled_substance' => 'sometimes|boolean',
            'cold_chain' => 'sometimes|boolean',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'El nombre del producto es obligatorio.',
            'name.max' => 'El nombre no puede tener más de 255 caracteres.',
            'description.required' => 'La descripción es obligatoria.',
            'description.max' => 'La descripción no puede superar 1000 caracteres.',
            'price.required' => 'El precio es obligatorio.',
            'price.numeric' => 'El precio debe ser numérico.',
            'price.min' => 'El precio no puede ser negativo.',
            'price.max' => 'El precio no puede superar 999,999.99.',
            'available.boolean' => 'La disponibilidad debe ser verdadero o falso.',
            'image.image' => 'El archivo debe ser una imagen.',
            'image.mimes' => 'La imagen debe ser jpeg, png, jpg o gif.',
            'image.max' => 'La imagen no puede superar 5MB.',
            'stock.integer' => 'El stock debe ser un entero.',
            'stock.min' => 'El stock no puede ser negativo.',
            'prescription_type.required_if' =>
                'Cuando el producto requiere receta, el tipo de receta es obligatorio.',
            'prescription_type.in' =>
                'El tipo de receta debe ser common, retained o special.',
        ];
    }
}
