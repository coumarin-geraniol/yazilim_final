<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'email' => 'required|string|email|unique:users,email',
            'password' => 'required|string|confirmed',
            'role' => 'required|integer',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Lütfen e-posta adresinizi giriniz.',
            'email.string' => 'Lütfen geçerli bir e-posta adresi giriniz.',
            'email.email' =>  'Lütfen düzgün biçimlendirilmiş bir e-posta adresi giriniz.',
            'email.unique' => 'Bu e-posta adresi zaten kayıtlı.',
            'password.required' => 'Lütfen şifrenizi giriniz.',
            'password.string' => 'Lütfen geçerli bir şifre giriniz.',
            'password.confirmed' => 'Girdiğiniz şifreler uyuşmuyor.',
            'role.required' => 'Lütfen kullanıcı tipini seçiniz.',
        ];
    }
}
