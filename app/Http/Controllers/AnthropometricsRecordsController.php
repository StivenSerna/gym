<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\AnthropometricMeasurement;
use Laracasts\Flash\Flash;

class AnthropometricsRecordsController extends Controller
{
    public function create($member_id){

    	return view('anthropometricrecord.create')->with('member_id', $member_id);

    }

    public function store(Request $request)
    {
        $anthropometricm = new AnthropometricMeasurement($request->all());
        //$anthropometricm->save() esto es un comentario;
        dd($anthropometricm);
        //Flash::success("¡ Se ha registrado la ficha antropometrica de " . $medicalrecord->member->first_name . " exitosamente !");

        //return redirect()->route('anthropometricrecord.create');
    }
}
