<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\IncomeExpense;
use Laracasts\Flash\Flash;

class Income_expensesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$incomeExpenses = IncomeExpense::orderBy('created_at', 'DEC')->paginate(5);
        $inflows = IncomeExpense::where('type', 'inflow')->orderBy('created_at', 'DEC')->paginate(5, ['*'], 'pagein');
        $outflows = IncomeExpense::where('type', 'outflow')->orderBy('created_at', 'DEC')->paginate(5,['*'], 'pageout');

        return view('incomeExpense.index')
            ->with('inflows', $inflows)
            ->with('outflows', $outflows);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $incomeExpense = new IncomeExpense($request->all());
        $incomeExpense->save();
        $tipo = " ";
        if ($request->type == "inflow") {
            $tipo = "Ingreso";
        } else {
            $tipo = "Egreso";
        }


        Flash::success("¡Se ha registrado el " . $tipo ." de manera exitosa!");

        return redirect()->route('incomeExpense.index');
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
