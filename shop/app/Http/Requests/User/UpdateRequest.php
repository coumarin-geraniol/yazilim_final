<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users,email',
            'surname' => 'required|string',
            'patronymic' => 'nullable|string',
            'age' => 'required|integer',
            'address' => 'required|string',
            'gender' => 'required|integer',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Lütfen adınızı giriniz.',
            'name.string' => 'Lütfen geçerli bir ad giriniz.',
            'email.required' => 'Lütfen e-posta adresinizi giriniz.',
            'email.string' => 'Lütfen geçerli bir e-posta adresi giriniz.',
            'email.email' =>  'Lütfen düzgün biçimlendirilmiş bir e-posta adresi giriniz.',
            'email.unique' => 'Bu e-posta adresi zaten kayıtlı.',
            'surname.required' => 'Lütfen soyadınızı giriniz.',
            'surname.string' => 'Lütfen geçerli bir soyad giriniz.',
            'age.required' => 'Lütfen yaşınızı giriniz.',
            'age.integer' => 'Lütfen geçerli bir yaş giriniz.',
            'address.required' => 'Lütfen adresinizi giriniz.',
            'address.string' => 'Lütfen geçerli bir adres giriniz.',
            'gender.required' => 'Lütfen cinsiyetinizi seçiniz.',
            'gender.integer' => 'Lütfen cinsiyet için geçerli bir seçenek belirleyiniz.',
        ];
    }
}
