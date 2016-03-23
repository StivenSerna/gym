<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Member;
use Carbon\Carbon;

class DashboardController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index()
	{
		$officialDate = Carbon::now()->subDay();

		$birthdays = Member::whereMonth('birthday', '=', $officialDate->format('m'))
		->whereDay('birthday', '=',  $officialDate->format('d'))->get();

    		//dd($members);
		return view('welcome')->with('birthdays', $birthdays);
	}
}
