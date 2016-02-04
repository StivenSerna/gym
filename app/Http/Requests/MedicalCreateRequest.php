<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class MedicalCreateRequest extends Request
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
        
       'current_diseases' =>'alpha',
        'suffered_diseases' =>'required|alpha',
        'suffered_fractures'=>'alpha',
        'observation' => 'required'
        ];
    }

    public function messages()
    {
        return [
        'required' => 'Este campo es requerido',
        'alpha' => 'Este campo solo debe contener caracteres alfabeticos'
        ];
    }
}
