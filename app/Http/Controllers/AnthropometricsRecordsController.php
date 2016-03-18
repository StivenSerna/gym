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
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function create($member_id){

		$member = Member::find($member_id);
		return view('anthropometricrecord.create')->with('member', $member);

	}

	public function store(Request $request)
	{
		$anthropometricm = new AnthropometricMeasurement($request->all());
		$leftanthropometric = new LeftAnthropometric($request->all());
		$rightanthropometric = new RightAnthropometric($request->all());


		if ($anthropometricm->height == 0) {
			$imc = 0;
		}
		else{
			$imc = $anthropometricm->weight / (($anthropometricm->height / 100) * ($anthropometricm->height / 100));
		}
		$anthropometricm->imc = $imc;

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

	public function destroy(Request $request, $id)
	{
		if($request->optradio == 1){

			$anthropometricrecords = AnthropometricMeasurement::where('member_id', $id)->orderBy('created_at', 'DEC')->take(1)->pluck('id');
			$delete = AnthropometricMeasurement::where('id', '!=', $anthropometricrecords)->where('member_id', $id)->delete();

			Flash::info("¡ Se ha(n) eliminado la(s) ficha(s) antropometrica(s) antiguas exitosamente !");

			return redirect()->route('admin.member.show', $id);

		}
		elseif($request->optradio == 2){

			$anthropometricrecords = AnthropometricMeasurement::where('member_id', $id)->orderBy('created_at', 'ASC')->take($request->borrar)->delete();
			//dd($request->borrar);
			Flash::info("¡ Se ha(n) eliminado la(s) ficha(s) antropometrica(s) antiguas exitosamente !");

			return redirect()->route('admin.member.show', $id);
		}
		elseif($request->optradio == 3){

			$fichasAll = AnthropometricMeasurement::where('member_id', $id)->count();
			$borrar = $fichasAll - $request->dejar;

			$anthropometricrecords = AnthropometricMeasurement::where('member_id', $id)->orderBy('created_at', 'ASC')->take($borrar)->delete();

			Flash::info("¡ Se ha(n) eliminado la(s) ficha(s) antropometrica(s) antiguas exitosamente !");

			return redirect()->route('admin.member.show', $id);

		}

	}
}
