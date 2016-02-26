<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\MemberCreateRequest;
use App\Http\Requests\MemberEditRequest;
use App\Http\Controllers\Controller;
use App\Member;
use App\Image;
use App\AnthropometricMeasurement;
use Laracasts\Flash\Flash;
use Carbon\Carbon;


class MembersController extends Controller
{
    public function index ()
    {
        $members = Member::orderBy('created_at', 'DEC')->get();
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

        $birthDate = $member->birthday;
        $birthDate = explode("-", $birthDate);

        $member->age = Carbon::createFromDate($birthDate[0], $birthDate[1], $birthDate[2])->age;
        $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
        $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sabado");

        //optimizable colocandolo a la hora de insertar la medicion

        foreach ($member->anthropometricMeasurements as $anthrom) {
            if ($anthrom->height == 0) {
                $imc = 0;
            }
            else{
                $imc = $anthrom->weight / (($anthrom->height / 100) * ($anthrom->height / 100));
            }
            $anthrom->imc = $imc;
        }

        $currentdate = Carbon::today();

        $affiliations = $member->affiliations;

        foreach ($affiliations as $affiliation) {
            $finalization = new Carbon($affiliation->finalization);
            if ($currentdate->lte($finalization)) {
                $affiliation->active = true;
            } else {
                $affiliation->active = false;
            }
        }
        $member->affiliations = $affiliations;

        if ($member->affiliations->where('active', true)->first() != null)
        {
            $memshipactiva = $member->affiliations->where('active', true)->first();

            $initiation = new Carbon($memshipactiva->initiation);
            $finalization = new Carbon($memshipactiva->finalization);

            $corrido = $initiation->diffInDays($currentdate);

            if ($initiation->lt($currentdate)) {
                $diference = $initiation->diffInDays($finalization);
                $porcentaje = ($corrido / $diference) * 100;
            } else {
                $porcentaje = 0;
            }

            $memshipactiva->porcentaje = $porcentaje;

        }else{
            $memshipactiva = null;
        }

        return view('member.show', ['member' => $member, 'meses' => $meses, 'dias' => $dias, 'activa' => $memshipactiva]);
    }

    public function edit($id)
    {

    }

    public function update(MemberEditRequest $request, $id)
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
            $image->member()->associate($member);
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
        elseif (isset($request->nombre)) {
            $members = Member::where('first_name', $request->nombre)->orWhere('second_name', $request->nombre);
            //dd($member);
            if($members->first() == null){
                Flash::error("No existe nungun miembro con el nombre " . $request->nombre . " registrado");
                return redirect()->route('admin.member.index');
            }
            else{
                dd($members);
            }
        }
        elseif (isset($request->apellido)) {
            $members = Member::where('last_name', $request->apellido);
            //dd($member);
            if($members->first() == null){
                Flash::error("No existe nungun miembro con el apellido " . $request->apellido . " registrado");
                return redirect()->route('admin.member.index');
            }
            else{
                dd($members);
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
