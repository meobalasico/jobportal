<?php

// app/Http/Requests/CreateUserRequest.php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            "name" => 'required|string|max:255',
            "email" => 'required|string|email|unique:App\Models\User,email|max:255',
            'password' => 'required|min:8',
        ];
    }
}
