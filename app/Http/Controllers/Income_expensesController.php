<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\IncomeExpense;
use Laracasts\Flash\Flash;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;

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
        $counts = array(
            "todos" => IncomeExpense::all()->count(),
            "ingresos" => IncomeExpense::where('type', 'inflow')->count(),
            "egresos" => IncomeExpense::where('type', 'outflow')->count(),
            "page" => "week"
            );

        $inflows = IncomeExpense::where('type', 'inflow')
        ->orderBy('created_at', 'DEC')
        ->paginate(20, ['*'], 'pagein');

        $outflows = IncomeExpense::where('type', 'outflow')
        ->orderBy('created_at', 'DEC')
        ->paginate(20,['*'], 'pageout');

        return view('incomeExpense.index')
        ->with('inflows', $inflows)
        ->with('outflows', $outflows)
        ->with('countIE', $counts);
    }

    public function lastcashbox($tab){

        $currentdate = Carbon::today();

        if ($tab == 1) {
            $page = "week";
            $currentdate->subWeek();
        }else{
            $page = "month";
            $currentdate->subMonth(1);
        }

        $counts = array(
            "todos" => IncomeExpense::all()->count(),
            "page" => $page
            );

        $incomeExpenses = IncomeExpense::where('created_at', '>=', $currentdate)
        ->orderBy('created_at', 'DEC')
        ->paginate(20, ['*'], 'pagein');

        return view('incomeExpense.showtab_onlytable')
        ->with('incomeExpense', $incomeExpenses)
        ->with('countIE', $counts);
    }


    public function customsearch(){

        $range = Input::get('desde-hasta', false);
        $description = Input::get('description', false);
        $typeIn = Input::get('typeIn', false);
        $typeOut = Input::get('typeOut', false);
        $currentdate = Carbon::today();
        $type = ["inflow", "outflow"];
        

        if ($range == null) {
            $range = "0000-00-00/".$currentdate->addDay(1);
        }

        if ($typeIn != "true" && $typeOut == "true"){
            $type = ["outflow"];
        }
        elseif ($typeIn == "true" && $typeOut != "true"){
            $type = ["inflow"];
        }

        $arrayRange = explode("/", $range);

        $counts = array(
            "todos" => IncomeExpense::all()->count(),
            "page" => "custom"
            );

        $incomeExpenses = IncomeExpense::where('created_at', '>=', $arrayRange[0])
        ->where('created_at', '<=', $arrayRange[1])
        ->where('description', 'like', '%'.$description.'%')
        ->whereIn('type', $type)
        ->orderBy('created_at', 'DEC')
        ->paginate(20, ['*'], 'pagein');

        return view('incomeExpense.showtab_onlytable')
        ->with('incomeExpense', $incomeExpenses)
        ->with('countIE', $counts);
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
