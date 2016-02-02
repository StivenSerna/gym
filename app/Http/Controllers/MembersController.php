<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Member;
use Laracasts\Flash\Flash;

class MembersController extends Controller
{
    public function index ()
    {
        $members = Member::orderBy('created_at', 'DEC')->paginate(15);
        return view('member.index')->with('mem', $members);
    }

    public function create ()
    {
        return view('member.create');
    }

    public function store (Request $request)
    {
        $member = new Member($request->all());
        $member->save();
        Flash::success("¡Se ha registrado a " . $member->first_name . " de manera exitosa!");

        return redirect()->route('medicalrecord.create');
    }

    public function show ($id)
    {
        return view('member.show', ['id' => 1]);

    }

    public function edit ($id)
    {

    }
}
