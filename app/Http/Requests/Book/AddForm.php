<?php

namespace App\Http\Requests\Book;

use Illuminate\Foundation\Http\FormRequest;

class AddForm extends FormRequest
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
            'name' => 'required|string|min:3|max:50',
            'serial_number' => 'nullable|string|min:16|max:16',
            'publisher_year' => 'required|integer',
            'price' => 'required|integer',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'A username is required.',
            'name.string' => 'A username must be a string.',
            'name.min' => 'A username must be at least :min characters.',
            'name.max' => 'A username must be a maximum of :max characters.',

            'serial_number.string' => 'A serial number must be a string.',
            'serial_number.min' => 'A serial number must be at least :min characters.',
            'serial_number.max' => 'A serial number must be a maximum of :max characters.',

            'publisher_year.required' => 'A publisher year is required.',
            'publisher_year.integer' => 'A publisher year must be a integer.',

            'price.required' => 'A price is required.',
            'price.integer' => 'A price must be a integer.',
        ];
    }
}
