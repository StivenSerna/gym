<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\LeftAnthropometric;
use App\RightAnthropometric;
use App\AnthropometricMeasurement;
use App\Member;
use Laracasts\Flash\Flash;

class AnthropometricsRecordsController extends Controller
{
	public function create($member_id){

		return view('anthropometricrecord.create')->with('member_id', $member_id);

	}

	public function store(Request $request)
	{
		$anthropometricm = new AnthropometricMeasurement($request->all());
		$leftanthropometric = new LeftAnthropometric($request->all());
		$rightanthropometric = new RightAnthropometric($request->all());
        //$anthropometricm->save();
		$member = Member::find($request->member_id);
		$leftanthropometric->save();
		$rightanthropometric->save();

		$anthropometricm->leftAnthropometric()->associate($leftanthropometric);
		$anthropometricm->rightAnthropometric()->associate($rightanthropometric);

		$anthropometricm->member()->associate($member);
		$anthropometricm->save();

      Flash::success("¡ Se ha registrado la ficha antropometrica de " . $member->first_name . " exitosamente !");

       return redirect()->route('admin.member.show', $member->id);
	}

	public function destroy($id)
	{
		$anthropometricrecord = AnthropometricMeasurement::where('member_id', $id);

	}
}
