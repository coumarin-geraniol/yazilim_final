<?php

namespace App\Http\Requests\Item;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'title' => 'required|string',
            'description' => 'required',
            'content' => 'required',
            'images' => 'required|array',
            'images.*' => 'required|file',
            'category_id' => 'required|exists:categories,id',
            'seller_id' => 'required|exists:sellers,id',
            'price' => 'required|integer',
            'quantity' => 'required|integer',
            'type' => 'required|integer',
            'tag_ids' => 'required|array',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Lütfen ürün için bir başlık girin.',
            'title.string' => 'Başlık metin formatında olmalıdır.',

            'description.required' => 'Lütfen ürün için bir açıklama girin.',

            'content.required' => 'Lütfen ürün için bir içerik girin.',
            'content.string' => 'İçerik metin formatında olmalıdır.',

            'images.required' => 'Lütfen ürün için geçerli resim yükleyin. Boyut en fazla 1MB olabilir',
            'images.array' => 'resimler dizi formatında olmalıdır.',

            'images.*.file' => 'Dosya bir resim olmalıdır.',

            'category_id.required' => 'Lütfen ürün için bir kategori seçin.',
            'category_id.exists' => 'Lütfen ürün için geçerli bir kategori seçin.',

            'seller_id.required' => 'Lütfen ürün için bir tedarikçi seçin.',
            'seller_id.exists' => 'Lütfen ürün için geçerli bir tedarikçi seçin.',

            'price.required' => 'Lütfen bir fiyat girin.',
            'price.integer' => 'Fiyat bir tam sayı olmalıdır.',

            'count.required' => 'Lütfen bir adet girin.',
            'count.integer' => 'Adet bir tam sayı olmalıdır.',

            'type.required' => 'Lütfen bir birim girin.',
            'type.integer' => 'Lütfen geçerli formatta giriniz.',

            'tag_ids.required' => 'Lütfen ürün için en az bir etiket seçin.',
            'tag_ids.array' => 'Etiketler dizi formatında seçilmelidir.',
        ];
    }

}
