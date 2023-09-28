<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SellerUpdateRequest extends FormRequest
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
            'shopname' => 'required'. $this->id,
            'location' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'shopname.required' => 'Shop name is required',
            'shopname.unique' => 'Shop name already exists',
            'location' => 'Location required',
        ];
    }
}
