<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookCreate extends FormRequest
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
            'phone_name' => 'required|max:255',
            'description' => 'required|max:255',
            'price' => 'required|numeric',
            'display' => 'required|max:255',
            'battery' => 'required|max:255',
            'storage' => 'required|max:255',
        ];
    }
}
