<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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



Route::get('/', function () {
    return view('login');
});
Route::get('/regist', function () {
    return view('registrasi');
});
route::post('/registrasi','LoginController@simpanregistrasi');
route::post('/postlogin','LoginController@postlogin');
route::get('/logout','LoginController@logout');

Route::group(['middleware' => ['auth','ceklevel:admin,user']], function () {
    Route::get('/getDetailKtp/{ktp}/detail', 'c_ktp@getDetailKtp');
    Route::get('/ktp', 'c_ktp@index');
    Route::get('/ExportKtp', 'c_ktp@ktpexport');    
});

Route::group(['middleware' => ['auth','ceklevel:admin']], function () {
    Route::get('/addPage', function () {return view('addKtp');});
    Route::get('/getEditKtp/{ktp}/edit', 'c_ktp@getEditKtp');
    Route::post('/ImportKtp', 'c_ktp@ktpimport');
    Route::post('/AddKtp', 'c_ktp@addKtp');
    Route::post('/EditKtp/{ktp}', 'c_ktp@editKtp');
    Route::get('/Delete/{{$data->id}}', 'c_ktp@delKtp');
    Route::get('/ktp/delete/{ktp}', 'c_ktp@destroy');    
});
