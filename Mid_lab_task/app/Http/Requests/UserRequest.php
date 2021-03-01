<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'email' => 'required|email|unique:user|max:49|bail',
            'password' => 'required|max:20|min:2'
        ];
    }

    public function messages(){
        return [
            'email.required' => "Email must be valid.",
            'password.required' =>"Fill password field, Hint: Alphanumeric"
        ];
    }
}
