<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
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
            'company_name' => 'required|min:4',
            'agent' => 'required|min:4|max:100',
            'business_areas' => 'required',
            'email' => 'required|email|unique:companies,email',
            'phone' => 'required|numeric|min:10',
            'location' => 'required|min:4',
            'seflink' => 'required',
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
            // company name
            'company_name.required' => 'Şirkətin adı boş olmamalıdır',
            'company_name.min' => 'Şirkətin adı minimum 4 karakter olmalıdır',

            // business area
            'business_areas.required' => 'Biznes sahəsi mütləq seçilməlidir',

            // agent name
            'agent.required' => 'Təmsilçinin adı boş olmamalıdır',
            'agent.min' => 'Təmsilçinin adı minimum 4 karakter olmalıdır',
            'agent.max' => 'Təmsilçinin adı maksimum 100 karakter olmalıdır',

            // email
            'email.required' => 'E-poçt ünvanı boş olmamalıdır',
            'email.email' => 'E-poçt ünvanı standartlara uyğun deyil',
            'email.unique' => 'E-poçt ünvanı artıq qeydiyyatdan keçmişdir',

            // phone
            'phone.required' => 'Əlaqə nömrəsi boş olmamalıdır',
            'phone.numeric' => 'Əlaqə nömrəsi yalnız rəqəm olmalıdır',
            'phone.min' => 'Əlaqə nömrəsi minimum 10 karakter olmalıdır',

            // location
            'location.required' => 'Şirkətin ünvanı boş olmamalıdır',
            'location.min' => 'Şirkətin ünvanı minimum 4 karakter olmalıdır',

            // seflink
            'seflink.required' => 'Boş olmamalıdır',
        ];
    }
}
