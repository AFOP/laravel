<?php

namespace App\Http\Requests;

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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'email' => 'required:unique:users,email',
            'username' => 'required|unique:users,username',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password'
        ];
    }

    public function messages(): array
{
    return [
        'email.required' => 'El campo email es obligatorio.',
        'email.unique' => 'El email ingresado ya está en uso.',
        'username.required' => 'El campo usuario es obligatorio.',
        'username.unique' => 'El nombre de usuario ingresado ya está en uso.',
        'password.required' => 'El campo contraseña es obligatorio.',
        'password.min' => 'La contraseña debe tener al menos :min caracteres.',
        'password_confirmation.required' => 'El campo confirmación de contraseña es obligatorio.',
        'password_confirmation.same' => 'La confirmación de contraseña no coincide con la contraseña ingresada.'
    ];
}
}
