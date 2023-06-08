<?php

namespace App\Http\Requests\User\Seller;

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
            'phone' => 'required|integer|unique:sellers,phone',
            'delivery_info' => 'required|string',
            'address' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Lütfen tedarikçi adı giriniz.',
            'name.string' => 'Lütfen geçerli bir ad giriniz.',
            'phone.required' => 'Lütfen telefon numarası giriniz.',
            'phone.string' => 'Lütfen geçerli bir telefon numarası giriniz.',
            'phone.unique' => 'Bu telefon numarası zaten kayıtlı.',
            'delivery_info.required' => 'Lütfen teslimat bilgisi giriniz.',
            'delivery_info.string' => 'Lütfen geçerli bir teslimat bilgisi giriniz.',
            'address.required' => 'Lütfen adresinizi giriniz.',
            'address.string' => 'Lütfen geçerli bir adres giriniz.',
        ];
    }
}
