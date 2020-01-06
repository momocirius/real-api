<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersRequest extends FormRequest
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
            "email" => "bail|required|email|unique:users,email",
            "password" => "bail|min:6|required_with:password_confirmation|same:password_confirmation",
            "password_confirmation" => "min:6",
            "role" => "bail|required|in:1,2,3,4,5"
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            "email.unique" => "L'email exist",
            "email.required" => "L'email est requis",
            "email.email" => "Veuillez rentrer un email valide",
            "password.min" => "le mot de passe doit être supérieur a 6 caractères",
            "password.required_with" => "Le mot de passe est requis",
            "password.same" => "Le mot de passe doit être égale au mot de passe de confirmation",
            "role.in" => "1 2 3 4 5"
        ];
    }
}
