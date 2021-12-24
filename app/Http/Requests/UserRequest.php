<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
        $user_validation = [
            "name" => ['required','max:255','string'],
            "email" => ['required','unique:users,email'],
            "password" => 'required',
        ];
        if(request()->isMethod('PUT')) {
            $user_validation['email'] = Rule::unique('users', 'email')->ignore($this->id);
            $user_validation['password'] = '';
        }
        return $user_validation;
    }
}
