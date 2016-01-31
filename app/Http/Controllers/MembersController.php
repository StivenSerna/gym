<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MembersController extends Controller
{
    public function index ()
    {
        
    }

    public function create ()
    {

    	return view('member.create');

    }

    public function store ()
    {
        return redirect()->route('medicalrecord.create');
    }

    public function show ($id)
    {

    }

    public function edit ($id)
    {

    }
}
