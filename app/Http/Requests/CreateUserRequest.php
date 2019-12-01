<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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

    /*
     * добавил немного правил*/
    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'email' => 'email|required',
            'password' => 'required|max:255',
            'experience' => 'numeric|max:255',
            'nick_name' => 'max:255',
            'last_name' => 'max:255',
            'phone' => 'max:12',
            'avatar' => 'image',
            'gender' => 'in:male,female',
        ];
    }

    public function messages()
{
    return [
        'name.required' => 'Поле Имя не заполнено! (Кастомный вывод)'
        
    ];
}
}
