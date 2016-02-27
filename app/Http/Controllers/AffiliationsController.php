<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\AffiliationCreateRequest;
use App\Http\Controllers\Controller;
use App\Membership;
use App\Member;
use App\Affiliation;
use App\Payment;
use Carbon\Carbon;
use Laracasts\Flash\Flash;

class AffiliationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "Holi";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($member_id)
    {

        $memberships = Membership::all()->lists('description', 'id');
        $membershipsAll = Membership::all();
        $member = Member::find($member_id);

        $rangeArray = array();

        $rangeDates = \App\Affiliation::orderBy('finalization', 'DEC')
        ->where('member_id', $member_id)
        ->where('finalization', '>=', Carbon::now())->get();

        foreach ($rangeDates as $range) {

            $initiationRange = new Carbon($range->initiation);
            $finalizationRange = new Carbon($range->finalization);

            $diference = $initiationRange->diffInDays($finalizationRange);

            for ($i=0; $i <= $diference; $i++) {
                array_unshift($rangeArray, "'".$initiationRange->copy()->format('Y-m-d')."'");
                $initiationRange->addDay();
            }

        }

        return view('affiliation.create')->with('memberships', $memberships)
        ->with('membershipsAll', $membershipsAll)
        ->with('member', $member)
        ->with('affiliationRange', $rangeArray);


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AffiliationCreateRequest $request)
    {
        //dd($request);
        /*"_token" => "8s9rQffPRk7lOCtbGidK1Wzvp4fmMQ00GLTvNFQv"
      "member_id" => "1"
      "membership_id" => "1"
      "initiation" => "2016-02-11"
      "type" => "payment"

          0 => "initiation"
    1 => "finalization"
    2 => "price"
    3 => "payout"
    4 => "type"
    5 => "active"
    6 => "member_id"
    7 => "membership_id"*/

    $membership = Membership::find($request->membership_id);

    $affiliation = new Affiliation($request->all());
    $payment = new Payment();


    $end = new Carbon($request->initiation);
    if ($membership->month > 0) {
        $end->addMonths($membership->month);
    }
    if ($membership->day > 0) {
        $end->addDays($membership->day - 1);
    }

    $payment->member_id = $request->member_id;

    $affiliation->finalization = $end;
    $affiliation->price =$membership->price;

    if ($request->type == "credit") {
        $payment->amount = $request->payout;
        $payment->type = "payout";
    }else{
        $payment->amount = $membership->price;
        $payment->type = "payment";
    }

    $affiliation->save();

    if ($payment->amount > 0) {
        $payment->save();
    }

    Flash::success("¡Se ha registrado la afiliacion del miembro de manera exitosa!");

    return redirect()->route('admin.member.show', [$request->member_id, '#membership-member']);
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
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
