<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Membership;
use App\Http\Requests\MembershipCreateRequest;
use Laracasts\Flash\Flash;


class MembershipsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $memberships= Membership::All();
        return view('membership.index')->with('memberships',$memberships);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('membership.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
        {
            $hola= Membership::create([
            'description' => $request ["description"],
            'price' => $request ["price"],
            'month' => $request ["month"],
            'day'=> $request ["day"],
            ]);
            $hola->save();
            return view('membership.create');
            
        }

          
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($description)
    {
        $membership= Membership::find($description);
        return view('membership.edit')->with('membership',$membership);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $membership = Membership::find($id);
        $membership->description = $request->description;
        $membership->price = $request->price;
        $membership->month = $request->month;
        $membership->day = $request->day;
        $membership->save();

        Flash::success('La Membresia ' . $membership->description . ' se ha actualizado correctamente');
        return redirect()->route('membership.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $membership = Membership::find($id);
        $membership->delete();

        Flash::error("¡El miembro " . $membership->description . " fue eliminado de manera exitosa!");
        return redirect()->route('membership.index');
    }
}
