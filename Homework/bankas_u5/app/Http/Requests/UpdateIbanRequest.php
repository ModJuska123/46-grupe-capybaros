<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateIbanRequest extends FormRequest
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
            'balance' => 'integer|max:14',
        ];
    }

    public function messages(): array
    {
        return
            [
                'balance.string' => 'Lėšos turi būti įvedamos skaičiais',
                'balance.max' => 'Lėšas turi sudaryti maksimaliai 14 simbolių',
            ];
    }
}
