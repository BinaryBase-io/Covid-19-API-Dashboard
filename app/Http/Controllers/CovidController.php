<?php

namespace App\Http\Controllers;

use App\covid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailUser;
use App\StatusBD;

class CovidController extends Controller
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
        $statusBD = StatusBD::find(1);
        $json = json_decode(file_get_contents('https://covid19.mathdro.id/api'));
        $jsonBGD = json_decode(file_get_contents('https://covid19.mathdro.id/api/countries/BGD'));

        //dd($json->confirmed->value);

        return view("welcome", compact('statusBD', 'json', 'jsonBGD'));
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

        $request->validate([
            'p_name' => 'required',
            'p_age' => 'required|numeric',
            'p_sex' => 'required',
            'p_mobile' => 'required',
            'p_address' => 'required'
        ]);


        $covid = new covid;
        $covid->p_name = $request->p_name;
        $covid->p_age = $request->p_age;
        $covid->p_sex = $request->p_sex;
        $covid->p_mobile = $request->p_mobile;
        $covid->s_mobile = $request->s_mobile;
        $covid->p_address = $request->p_address;
        $covid->lat = $request->lat;
        $covid->lan = $request->lan;
        $covid->gps_address = $request->gps_address;
        $covid->gps_admin_area = $request->gps_admin_area;
        $covid->gps_admin_sub_area = $request->gps_admin_sub_area;

        //dd($covid);
        if (!$covid->save()) {
            return response()->json([
                'message' => 'Something Wrong!!! Please try again latter.',
            ], 400);
        }else {
	   $to = 'ssazal.14@gmail.com';
	   Mail::to($to)->send(new MailUser($covid));

            return response()->json([
                'message' => 'Great success! Thanks for your information',
                'covid' => $covid
            ], 201);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\covid  $covid
     * @return \Illuminate\Http\Response
     */
    public function show(covid $covid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\covid  $covid
     * @return \Illuminate\Http\Response
     */
    public function edit(covid $covid)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\covid  $covid
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, covid $covid)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\covid  $covid
     * @return \Illuminate\Http\Response
     */
    public function destroy(covid $covid)
    {
        //
    }
}
