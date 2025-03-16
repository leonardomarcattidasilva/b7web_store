<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'required|string|min:3',
            'email' => 'required|email',
            'state_id' => 'required|string',
            'password' => 'required|min:3|confirmed'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'O nome nome é obrigatório',
            'name.string' => 'O campo nome deve ser um texto',
            'name.min' => 'O campo nome deve ter no mínimo 3 caracteres',
            'email.required' => 'O email é obrigatório',
            'email.email' => 'O email não é válido',
            'state_id.required' => 'O campo estado é obrigatório',
            'password.required' => 'A senha nome é obrigatória',
            'password.min' => 'O campo nome deve ter no mínimo 3 caracteres',
            'password.confirmed' => 'A senha não pode ser confirmada',
        ];
    }
}
