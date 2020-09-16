<?php

namespace App\Http\Requests\Book;

use Illuminate\Foundation\Http\FormRequest;

class Delete extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'id' => 'required|exists:App\Book,id',
        ];
    }

    public function messages()
    {
        return [
            'id.exists' => 'Book not found.',
            'id.required' => 'A :attribute is required.',
        ];
    }
}
