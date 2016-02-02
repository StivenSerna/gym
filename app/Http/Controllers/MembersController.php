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
        return view('member.index')->with('members', $members);
    }

    public function create ()
    {
        return view('member.create');
    }

    public function store (Request $request)
    {
        $member = new Member($request->all());
        $member->save();
        Flash::success("¡Se ha registrado a " . $member->first_name . " fue registrado de manera exitosa!");

        return redirect()->route('medicalrecord.create');
    }

    public function show ($id)
    {
        $serna = Member::find($id);
        return view('member.show', ['user' => $serna]);

    }

    public function edit ($id)
    {

    }

    public function destroy($id)
    {
        $member = Member::find($id);
        $member->delete();

        Flash::error("¡El miembro " . $member->first_name . " fue eliminado de manera exitosa!");
        return redirect()->route('admin.member.index');
    }
}
