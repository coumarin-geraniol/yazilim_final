<?php

namespace App\Http\Requests\API\Order;

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
            'items' => 'required|array',
            'name' => 'required|string',
            'email' => 'required|string',
            'surname' => 'required|string',
            'address' => 'required|string',
            'country' => 'required|string',
            'phone' => 'required|string',
            'total_price' => 'required|integer',
        ];
    }

}
