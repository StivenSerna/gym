<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\MemberCreateRequest;
use App\Http\Controllers\Controller;
use App\Member;
use App\Image;
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

    public function store (MemberCreateRequest $request)
    {
        if($request->file('photo')){
            $file = $request->file('photo');
            $name = 'fotogym_' . time() . '.' . $file->getClientOriginalExtension();
            $path= public_path() . '/images/members/';
            $file->move($path, $name);
        }

        $member = new Member($request->all());
        $member->save();

        $image = new Image();
        $image->name = $name;
        $image->member()->associate($member);
        $image->save();

        Flash::success("¡Se ha registrado a " . $member->first_name . " de manera exitosa!");

        return redirect()->route('medicalrecord.create', $image->member_id);
    }

    public function show ($id)
    {
        $member = Member::find($id);
        return view('member.show', ['user' => $member]);
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
