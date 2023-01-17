<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'user' => 'required|unique:users,user,'.$this->user()->id.'|string',
            'name' => 'required|unique:users,name,'.$this->user()->id.'|string',
            'email' => 'required|unique:users,email,'.$this->user()->id.'|email',
            'password' => 'sometimes|string'
        ];
    }
}
