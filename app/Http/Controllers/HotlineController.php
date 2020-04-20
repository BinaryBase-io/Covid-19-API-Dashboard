<?php

namespace App\Http\Controllers;

use App\Hotline;
use Illuminate\Http\Request;

class HotlineController extends Controller
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
        $hotlines = Hotline::all();

        return view('hotline', compact('hotlines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hotline_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'number' => 'required',
            'name' => 'required'
        ]);

      $hotline =  Hotline::create($request->all());

     // dd($hotline);

        return redirect('hotline');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hotline  $hotline
     * @return \Illuminate\Http\Response
     */
    public function show(Hotline $hotline)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hotline  $hotline
     * @return \Illuminate\Http\Response
     */
    public function edit(Hotline $hotline)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hotline  $hotline
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hotline $hotline)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hotline  $hotline
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $data)
    {
        Hotline::destroy($data->id);


        return redirect('hotline');
    }
}
