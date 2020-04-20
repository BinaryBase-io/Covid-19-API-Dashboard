<?php

namespace App\Http\Controllers;

use App\GovPress;
use Illuminate\Http\Request;

class GovPressController extends Controller
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
        $govs = GovPress::all();

        return view('GovPress', compact('govs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('GovPressAdd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'url' => 'required',
            'name' => 'required'
        ]);

        GovPress::create($request->all());

        return redirect('gov-press');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\GovPress  $govPress
     * @return \Illuminate\Http\Response
     */
    public function show(GovPress $govPress)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GovPress  $govPress
     * @return \Illuminate\Http\Response
     */
    public function edit(GovPress $govPress)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GovPress  $govPress
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GovPress $govPress)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GovPress  $govPress
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $govPress)
    {
        GovPress::destroy($govPress->id);

        return redirect('gov-press');
    }
}
