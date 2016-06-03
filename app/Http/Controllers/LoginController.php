<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
use Crypt;

class LoginController extends Controller
{
	public function index(){

		if (User::all()->count() <= 0) {
			echo "No hay usuarios registrados";
		}
		$user = User::all()->first();
		return view('login.login')->with('user', $user);

	}

	public function authenticate(Request $request)
	{
		if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            // Authentication passed...'inicio'
			return redirect()->intended('/');
		}
		return redirect('login')->withErrors([
			'error' => 'El correo o la contraseña son incorrectos',
			]);
	}

	public function logout(){
		Auth::logout();
		return redirect('login');
	}

}
