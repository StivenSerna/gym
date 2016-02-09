<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\MemberCreateRequest;
use App\Http\Controllers\Controller;
use App\Member;
use App\Image;
use Laracasts\Flash\Flash;
use Carbon\Carbon;

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

        if(isset($name)){
            $image->name = $name;
        }
        else{
            $image->name = 'fotogym_placeholder.png' ;
        }

        $image->member()->associate($member);
        $image->save();


        Flash::success("¡Se ha registrado a " . $member->first_name . " de manera exitosa!");

        return redirect()->route('medicalrecord.create', $image->member_id);
    }

    public function show ($id)
    {
        $member = Member::find($id);
        //dd(Carbon::createFromDate(1991, 7, 19)->diff(Carbon::now())->format('%y years, %m months and %d days'));
        $birthDate = $member->birthday;
        $birthDate = explode("-", $birthDate);
        //dd($birthDate);
        //$age = (date("md", date("U", mktime(0, 0, 0, , , ))) > date("md") ? ((date("Y")-$birthDate[2])-1):(date("Y")-$birthDate[2]));
        //echo "Age is:".$age;
        $member->age = Carbon::createFromDate($birthDate[0], $birthDate[1], $birthDate[2])->age;
        return view('member.show', ['member' => $member]);
    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {
        $member = Member::find($id);
        if($request->file('photo')){
            $image = Image::firstOrCreate(['member_id' => $member->id]);
            $later= pathinfo($image->name);
            $file = $request->file('photo');

            if ($later['filename'] == 'fotogym_placeholder' | $later['filename'] == null) {
                $filename = 'fotogym_' . time();
            }
            else{
                $filename = $later['filename'];
            }

            $name =  $filename . '.' . $file->getClientOriginalExtension();
            $path= public_path() . '/images/members/';
            $file->move($path, $name);

            $image->name = $name;
            $image->save();
        }

        $member->fill($request->all());
        $member->save();

        Flash::success("<b>¡Se ha actualizado a " . $member->first_name . " de manera exitosa!</b>");

        return redirect()->route('admin.member.show', $member->id);

    }

    public function search (Request $request)
    {
        if(isset($request->documento)){
            //dd($request->documento);
            $member = Member::where('document', $request->documento)->first();
            //dd($member);
            if($member == null){
                Flash::error("No existe nungun miembro con el documento " . $request->documento . " registrado");
                return redirect()->route('admin.member.index');
            }
            else{
                return redirect()->route('admin.member.show', ['member' => $member]);
            }
        }
    }

    public function destroy($id)
    {
        $member = Member::find($id);
        $member->delete();

        Flash::error("¡El miembro " . $member->first_name . " fue eliminado de manera exitosa!");
        return redirect()->route('admin.member.index');
    }
}
