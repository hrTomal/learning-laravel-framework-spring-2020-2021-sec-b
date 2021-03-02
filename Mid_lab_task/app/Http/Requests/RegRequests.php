<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;


class RegRequests extends FormRequest
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
            'email' => 'required|email|unique:user|min:10|max:50|bail',
            'password_confirmation' => 'required|max:20|min:8|alpha_num',
            'password' => 'required|max:20|min:8|alpha_num|confirmed',
            'user_name' => 'required|max:30',
            'role' => 'required',
            'full_name' => 'required|max:30|alpha',
            'phone' => 'required|digits_between:11,15|numeric',
            'country' => 'max:20|min:3',
            'city' => 'max:20|min:3',
            'address' => 'max:20|min:3',
            'company' => 'max:20|min:3',
        ];
    }
}
