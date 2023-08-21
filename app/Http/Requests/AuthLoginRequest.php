<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthLoginRequest extends FormRequest
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
            'email' => 'required|email',
            'password' => 'required|min:6|max:15',
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
            // email
            'email.required' => 'Elektron poçt ünvanınızı daxil edin',
            'email.email' => 'Elektron poçt ünvanı düzgün daxil edilməyib',

            // password
            'password.required' => 'Şifrənizi daxil edin',
            'password.min' => 'Şifrəniz minimum 6 karakter olmalıdır',
            'password.max' => 'Şifrəniz maksimum 15 karakter olmalıdır',
        ];
    }
}
