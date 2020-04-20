<?php

namespace App\Http\Controllers;

use App\StatusBD;
use Illuminate\Http\Request;

class StatusBDController extends Controller
{

        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $statusBD = StatusBD::all();

        return response()->json([
            'statusBD' => $statusBD
        ]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\StatusBD  $statusBD
     * @return \Illuminate\Http\Response
     */
    public function show(StatusBD $statusBD)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StatusBD  $statusBD
     * @return \Illuminate\Http\Response
     */
    public function edit(StatusBD $statusBD)
    {
        $statusBD = StatusBD::find(1);
        $json = json_decode(file_get_contents('https://covid19.mathdro.id/api'));

        $jsonBGD = json_decode(file_get_contents('https://covid19.mathdro.id/api/countries/BGD'));

        return view('statusUpdate', compact('statusBD', 'json', 'jsonBGD'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StatusBD  $statusBD
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $request->validate([
            'total_infected' => 'required|numeric',
            'last_24_hour_infected' => 'required|numeric',
            'total_recover' => 'required|numeric',
            'total_death' => 'required|numeric',
            'world_total_infected' => 'required|numeric',
            'world_total_recover' => 'required|numeric',
            'world_total_death' => 'required|numeric'
        ]);

        $statusBD = StatusBD::find(1);

        //dd($request->all(), $statusBD);

       // $statusBD->total_test = $request->total_test;
       // $statusBD->last_24_hour_test = $request->last_24_hour_test;
        $statusBD->total_infected = $request->total_infected;
        $statusBD->last_24_hour_infected = $request->last_24_hour_infected;
        $statusBD->total_recover = $request->total_recover;
        $statusBD->total_death = $request->total_death;
        $statusBD->world_total_infected = $request->world_total_infected;
        $statusBD->world_total_recover = $request->world_total_recover;
        $statusBD->world_total_death = $request->world_total_death;

        if (!$statusBD->save()) {
            return redirect()->back()->withErrors('message', 'Data not saved!!!');
        }else {
            return redirect()->back()->with(['message' => $statusBD]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StatusBD  $statusBD
     * @return \Illuminate\Http\Response
     */
    public function destroy(StatusBD $statusBD)
    {
        //
    }
}
