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

Route::get('/', function () {return view('simple.home');});
Route::get('/quienessomos', function () {return view('simple.quienessomos');});
Route::get('/repuestos', function () {return view('simple.repuesto');});
Route::get('/contacto', function () {return view('simple.contacto');});
Route::get('/soporte', function () {return view('simple.soportetecnico');});
Route::get('/retiro', function () {return view('simple.retiroequipo');});
Route::get('/politica', function () {return view('simple.politicagarantia');});
Route::get('/marcasgarantia', function () {return view('simple.marcasgarantia');});
Route::get('/centroautorizado', function () {return view('simple.centroautorizado');});
Route::get('/periododevigencia', function () {return view('simple.periododevigencia');});
Route::get('/condicionesgarantia', function () {return view('simple.condicionesgarantia');});
Route::get('/fueradegarantia', function () {return view('simple.fueradegarantia');});
Route::get('/garantiainmediata', function () {return view('simple.garantiainmediata');});

Route::resource('/consulta', 'ConsultaController');
