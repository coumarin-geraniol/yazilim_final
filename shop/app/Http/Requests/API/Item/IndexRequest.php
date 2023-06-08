<?php

namespace App\Http\Requests\API\Item;

use Illuminate\Foundation\Http\FormRequest;

class IndexRequest extends FormRequest
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
            'categories' => 'nullable|array',
            'sellers' => 'nullable|array',
            'tags' => 'nullable|array',
            'prices' => 'nullable|array',
            'page' => 'required|integer',
        ];
    }

}
