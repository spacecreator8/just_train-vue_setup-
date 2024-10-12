<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApiTestRequest extends FormRequest
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
            'login'=>'string | required | unique:person,login',
            'email'=>'string | required | unique:person,email',
            'password'=>'string | required',
        ];
    }
}
