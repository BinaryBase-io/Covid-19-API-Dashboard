<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', "CovidController@index")->name('home');

Route::get('/status', 'StatusBDController@edit')->name('status');
Route::put('/statusBD', 'StatusBDController@update')->name('status_update');


Route::get('/hotline', 'HotlineController@index')->name('hotline');
Route::get('/hotline/create', 'HotlineController@create')->name('hotline_create');
Route::post('/hotline/add', 'HotlineController@store')->name('hotline_add');
Route::put('/hotline', 'HotlineController@update')->name('hotline_update');


Route::get('app/about', function () {
    return response(file_get_contents(base_path('public\about.en.json')))->header('Content-Type', 'application/json');
 })->name('about');
