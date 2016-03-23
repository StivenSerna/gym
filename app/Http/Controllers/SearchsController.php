<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Laracasts\Flash\Flash;
use Carbon\Carbon;
use App\Member;

class SearchsController extends Controller
{
	//$users = DB::table('users')                ->where('name', 'like', 'T%')                ->get();

	public function findMemberByDate(Request $request){

		$members = Member::where('date_of_admission', '>=', $request->start)
		->where('date_of_admission', '<=', $request->end)->get();

		if (count($members) > 0) {
			Flash::info("¡Se han encontrado " . count($members) . " coincidencias!");
		}
		else{
			Flash::warning("¡No se han encontrado coincidencias!");
		}

		return view('member.index')->with('members', $members);
	}

	public function findMemberByName(Request $request){

		$members = Member::where('first_name', 'like', '%'.$request->nombre.'%')
		->orWhere('last_name', 'like', '%'.$request->nombre.'%')->get();

		if (count($members) > 0) {
			Flash::info("¡Se han encontrado " . count($members) . " coincidencias!");
		}
		else{
			Flash::warning("¡No se han encontrado coincidencias!");
		}

		return view('member.index')->with('members', $members);

	}

	public function findMemberByDocument(Request $request){

		$member = Member::where('document', $request->documento)->first();
            //dd($member);
		if($member == null){
			Flash::warning("No existe nungun miembro con el documento " . $request->documento . " registrado");
			return redirect()->route('admin.member.index');
		}
		else{
			return redirect()->route('admin.member.show', ['member' => $member]);
		}

	}

}
