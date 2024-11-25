<?php

namespace App\Http\Requests\AuthRequest;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email' => 'required|string|min:6|max:50|email',
            'password' => 'required|min:6|max:20'
        ];
    }

    public function messages(){
        return [
            'required' => ':attribute required',
            'min' => ':attribute must be from :min characters',
            'email' => ':attribute must be email format',
        ];
    }

    public function attributes(){
        return [
            'name' => 'Name',
            'email' => 'Email',
            'password' => 'Password'
        ];
    }
}