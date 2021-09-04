<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator as ValidationValidator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class UserRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'bio' => 'required',
            'phone' => 'required',
            'dni' => 'required',
            'password' => 'required|min:8'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => ':attribute is required.',
            'email.required' => ':attribute is required.',
            'bio.required' => ':attribute is required.',
            'phone.required' => ':attribute is required.',
            'dni.required' => ':attribute is required.',
            'password.required' => ':attribute is required.'
        ];
    }

    public function failedValidation(ValidationValidator $validator)
    {
        //write your bussiness logic here otherwise it will give same old JSON response
       throw new HttpResponseException(response()->json(["errors"=> $validator->errors()], 422));
    }
}
