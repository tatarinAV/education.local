<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEducationalMaterialRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|max:128',
            'type' => 'required|numeric',
            'category_id' => 'required|numeric',
            'image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'description' => 'required|unique:posts|max:512',
            'price' =>'required|numeric',
            'file' =>'mimes:pdf|max:2048'
        ];
    }
}
