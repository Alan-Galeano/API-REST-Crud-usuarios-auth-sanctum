<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRquest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'user' => 'required|string|max:50|regex:/^[a-z0-9]+$/i',
            'name' => 'required|string|max:50|regex:/^[a-z0-9 ]+$/i',
            'email' => 'required|email',
            'password' => 'required|max:10'
        ];
    }
}
