<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovieRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => 'required',
            'synopsis' => 'required',
            'category_id' => 'required',
            'premiere_date' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'The field title is required',
            'synopsis.required' => 'The field synopsis is required',
            'category_id.required' => 'Category is required',
            'premiere_date.required' => 'The field premiere date is required'
        ];
    }
}
