<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreIbanRequest extends FormRequest
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
            'iban_No' => 'required|string|min:20',
            'balance' => 'integer|max:14',
            'client_id' => 'required|integer|exists:clients,id',
        ];
    }

    public function messages(): array
    {
        return
            [
                'iban_No.required' => 'Nėra įvestas iban numeris',
                'iban_No.string' => 'iban numeris turi būti tekstas',
                'iban_No.min' => 'iban numerį turi sudaryti bent 21 simbolis',
                'iban_No.max' => 'iban numerį turi sudaryti ne daugiau, kaip 21 simbolis',
                'balance.string' => 'Lėšos turi būti įvedamos skaičiais',
                'balance.max' => 'Lėšas turi sudaryti maksimaliai 14 simbolių',
                'client_id.required' => 'Nepasirinktas klientas',
                'client_id.integer' => 'Kliento id turi būti skaičius',
                'client_id.min' => 'Toks klientas neegzistuoja',

            ];
    }
}
