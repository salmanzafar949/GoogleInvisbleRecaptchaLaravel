<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormValidationRequest extends FormRequest
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
            //
            'name' => 'required|Max:20|string',
            'email' => 'required|Max:50|email',
            'username' => 'required|Max:20|string',
            'g-recaptcha-response' => 'required|captcha',
        ];
    }

    public function message()
    {
        return [
            
            'name.required'=> 'Name is also required',
            'name.max' => 'name should not be greater than 20 chars',
            'email.required'=> 'Email is also required',
            'username.required'=> 'Username is also required',
        ];

    }
}
