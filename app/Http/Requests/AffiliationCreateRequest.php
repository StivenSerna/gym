<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Carbon\Carbon;
use App\Affiliation;

class AffiliationCreateRequest extends Request
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

        $fechas = "|after:". Carbon::today()->subDay(1)->format('d-m-Y');

        return [
        'initiation' => 'required|date'.$fechas,
        ];
    }

    public function messages()
    {

        return [
        'initiation.required' => 'El campo de la fecha de inicio es obligatorio.',
        'initiation.after' => 'El fecha de inicio debe ser posterior a :date, puede deberse a que esta escogiendo un dia anterior al actual o que coincide con una membresia activa.',
        ];
    }
}
