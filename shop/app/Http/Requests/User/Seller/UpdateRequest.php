<?php

namespace App\Http\Requests\User\Seller;

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
            'delivery_info' => 'required|string',
            'phone' => 'required|integer',
            'address' => 'required|string',
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
            'delivery_info.required' => 'Lütfen teslimat bilglsl giriniz.',
            'delivery_info.string' => 'Lütfen geçerli bir teslimat bilglsl giriniz.',
            'phone.required' => 'Lütfen telefon numarası giriniz.',
            'phone.integer' => 'Lütfen geçerli bir telefon numarası giriniz.',
            'address.required' => 'Lütfen adresinizi giriniz.',
            'address.string' => 'Lütfen geçerli bir adres giriniz.',
        ];
    }
}
