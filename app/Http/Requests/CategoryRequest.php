<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    // public function authorize()
    // {
    //     return false;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'string|nullable|max:255',
            'parent_category_id' => 'integer|nullable',
        ];
    }

    // public function messages()
    // {
    //     return [
    //         'title.required' => 'A title is required',
    //         'body.required'  => 'A message is required',
    //     ];
    // }
}
