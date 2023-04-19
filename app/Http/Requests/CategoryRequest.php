<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|unique:categories'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'The field name is required',
            'name.unique' => 'The name of the category must be unique'
        ];
    }
}
