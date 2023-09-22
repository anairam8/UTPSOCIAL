<?php
namespace App\Http\Requests\Auth;


use Illuminate\Foundation\Http\FormRequest;

class profileRequest extends FormRequest
{
   
    public function rules()
    {
        return [
                'name' => 'required|max:50',
                'username' => 'required|unique:users,username,'.auth()->user()->id,
        ];
    }

    public function messages()
    {
        return[
            'name.required' => 'El nombre es obligatorio.',
            'name.max' => 'Supero la máxima cantidad de caracteres.',
            'username.required' => 'El username es obligatorio.',
            'username.unique' => 'El username ya esta en uso.',
        ];
    }
}
