<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateClientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

      /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|min:3|max:64',
            'surname' => 'required|string|min:3|max:64',
            'akId' => 'required|Integer|min:11',
        ];
    }

    public function messages(): array
    {
    return [
        'name.required' => 'Pamiršote įvesti vardą',
        'name.string' => 'Vardas turi būti tekstinis',
        'name.min' => 'Vardas turi būti bent 3 simboliai',
        'name.max' => 'Vardas turi būti ne daugiau 64 simbolių',
        'surname.required' => 'Pamiršote įvesti pavardę',
        'surname.string' => 'Pavardė turi būti tekstinis',
        'surname.min' => 'Pavardė turi būti bent 3 simboliai',
        'surname.max' => 'Pavardė turi būti ne daugiau 64 simbolių',
        'akId.required' => 'Pamiršote įvesti asmens kodą',
        'akId.Integer' => 'Asmens kodas turi būti skaičius',
        'akId.min' => 'Asmens kodas turi būti bent 11 simbolių',
    ];
    }
}
