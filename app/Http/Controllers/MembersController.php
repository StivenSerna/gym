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
    public function __construct()
    {
        $this->middleware('auth');
    }

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

        $currentdate = Carbon::today();
        $sumaAffiliations = $member->affiliations->sum('price');

        $affiliations = $member->affiliations;

        $affiliationActives = \App\Affiliation::orderBy('finalization', 'DEC')
        ->where('member_id', $member->id)
        ->where('finalization', '>=', $currentdate)->get();

        $affiliationInactives = \App\Affiliation::orderBy('finalization', 'DEC')
        ->where('member_id', $member->id)
        ->where('finalization', '<', $currentdate)->get();

        $member->affiliations = $affiliationActives;

        if ($affiliationActives->first() != null)
        {
            $memshipactiva = $affiliationActives->last();
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
        }
        else{
            $memshipactiva = null;
        }


        $saldo = $sumaAffiliations - $member->payments->sum('amount');
        $member->saldo = $saldo;
        $member->sumaPagos = $member->payments->sum('amount');
        $member->sumaAffiliations = $sumaAffiliations;


        if($member->sumaPagos == 0 and $sumaAffiliations == 0){
        //no tiene pagos ni afiliaciones
         $member->difUltimoPago = -1;
     }
     elseif ($member->sumaPagos <= 0 and $sumaAffiliations > 0){
            //no tiene pagos pero si tiene afiliaciones
        $fechaUltimoPago = \App\Affiliation::orderBy('created_at', 'asc')->where('member_id', $member->id)->first();
        $fechaUltimoPago = new Carbon($fechaUltimoPago->created_at);
        $difUltimoPago = $fechaUltimoPago->diffInDays($currentdate);
        $member->difUltimoPago = $difUltimoPago;
    }
    elseif($member->sumaPagos > 0 and $sumaAffiliations > 0){
            // tiene afiliaciones y pagos
        $fechaUltimoPago = new Carbon($member->payments->first()->created_at);
        $difUltimoPago = $fechaUltimoPago->diffInDays($currentdate);
        $member->difUltimoPago = $difUltimoPago;
    }

    return view('member.show', ['member' => $member, 'meses' => $meses, 'dias' => $dias, 'activa' => $memshipactiva, 'inactivas' => $affiliationInactives]);
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



public function destroy($id)
{
    $member = Member::find($id);
    $member->delete();

    Flash::error("¡El miembro " . $member->first_name . " fue eliminado de manera exitosa!");
    return redirect()->route('admin.member.index');
}
}
