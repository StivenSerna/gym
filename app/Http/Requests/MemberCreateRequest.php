<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class MemberCreateRequest extends Request
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
        'first_name' => 'required|alpha',
        'second_name' =>'alpha',
        'last_name' => 'required|alpha',
        'email' => 'required|email',
        'phone' => 'numeric',
        'birthday' => 'required',
        'gender' => 'required',
        'address' => 'required',
        'document' => 'required|numeric|unique:members',
        'date_of_admission' => 'required'
        ];
    }

    public function messages()
    {
        return [
        'required' => 'Este campo es requerido',
        'document.unique' => 'Ya existe un Miembro con este documento',
        'unique' => 'Ya existe un registro con este campo',
        'alpha' => 'Este campo solo debe contener caracteres alfabeticos',
        'email' => 'No es un correo valido',
        'numeric' => 'Este campo debe ser numerico'
        ];
    }
}
