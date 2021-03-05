<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'category'          => 'required',
            'product_name'      => 'required|max:30|min:5|alpha',
            'unit_price'        => 'required|min:0',
            'status'            => 'required'
        ];
    }
}
