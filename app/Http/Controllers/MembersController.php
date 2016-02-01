<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Member;

class MembersController extends Controller
{
    public function index ()
    {

    }

    public function create ()
    {
        return view('member.create');
    }

    public function store (Request $request)
    {
        $member = new Member($request->all());
        $member->save();

        dd('Miembro creado');
    }

    public function show ($id)
    {

    }

    public function edit ($id)
    {

    }
}
