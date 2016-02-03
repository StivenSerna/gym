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
        'first_name' => 'required',
        'second_name' => 'required',
        'last_name' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'birthday' => 'required',
        'gender' => 'required',
        'address' => 'required',
        'document' => 'required',
        'date_of_admission' => 'required'
        ];
    }

    public function messages()
    {
        return [
        'required' => 'Este campo es requerido',
        'unique' => 'Ya existe un registro con este campo',
        ];
    }
}
