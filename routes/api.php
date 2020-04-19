<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('covids', "CovidController@store");

Route::get('status', 'StatusBDController@index');

Route::get('app/about', function () {
   return response(file_get_contents(base_path('public\about.en.json')))->header('Content-Type', 'application/json');
});

Route::get('app/about/bn', function () {
   return response(file_get_contents(base_path('public\about.bn.json')))->header('Content-Type', 'application/json');
});
