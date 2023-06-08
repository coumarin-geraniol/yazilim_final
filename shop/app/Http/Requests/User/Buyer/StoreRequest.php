<?php

namespace App\Http\Requests\User\Buyer;

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
            'name' => 'required|string',
            'surname' => 'required|string',
            'phone' => 'required|integer',
            'address' => 'required|string',
            'gender' => 'required|integer',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Lütfen adınızı giriniz.',
            'name.string' => 'Lütfen geçerli bir ad giriniz.',
            'surname.required' => 'Lütfen soyadınızı giriniz.',
            'surname.string' => 'Lütfen geçerli bir soyad giriniz.',
            'phone.required' => 'Lütfen telefon numarası giriniz.',
            'phone.integer' => 'Lütfen geçerli bir telefon numarası giriniz.',
            'address.required' => 'Lütfen adresinizi giriniz.',
            'address.string' => 'Lütfen geçerli bir adres giriniz.',
            'gender.required' => 'Lütfen cinsiyetinizi seçiniz.',
            'gender.integer' => 'Lütfen cinsiyet için geçerli bir seçenek belirleyiniz.',
        ];
    }
}
