<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BankRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'companyname' => 'required',
            'companyiban' => 'required',
            'companyswift' => 'required',
            'companyaccount' => 'required',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            // name
            'companyname.required' => 'Enter your bank name',

            // iban
            'companyiban.required' => 'Enter your bank iban',

             // swift
             'companyswift.required' => 'Enter your bank swift',

             // account
             'companyaccount.required' => 'Enter your bank account',
        ];
    }
}
