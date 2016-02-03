<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Member;
use App\MedicalRecord;
use Laracasts\Flash\Flash;

class MedicalRecordsController extends Controller
{
    public function create($member_id)
    {
    	return view('medicalrecord.create')->with('member_id', $member_id);
    }

    public function store(Request $request)
    {
        $medicalrecord = MedicalRecord::firstOrCreate(['member_id' => $request->member_id]);
        $medicalrecord->suffered_diseases = $request->suffered_diseases;
        $medicalrecord->current_diseases = $request->current_diseases;
        $medicalrecord->suffered_fractures = $request->suffered_fractures;
        $medicalrecord->observation = $request->observation;

        $member = Member::find($request->member_id);
        $medicalrecord->member()->associate($member);
        $medicalrecord->save();
        Flash::success("¡ Se ha registrado la ficha medica de " . $medicalrecord->member->first_name . " exitosamente !");
        return redirect()->route('anthropometricrecord.create', $medicalrecord->member->id);
    }

    public function edit()
    {

    }

    public function update($id)
    {

    }
}
