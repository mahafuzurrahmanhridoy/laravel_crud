<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
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
            'title' => 'required | unique:products,title',
            'sku_number' => 'required|unique:products,sku_number',
            'price' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:2048'
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Product name is required',
            'title.unique' => 'Product name allready has been created',
            'sku_number.required' => 'SKU is required',
            'price.required' => 'Price is required',

        ];
    }
}
