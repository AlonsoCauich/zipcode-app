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
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', function () use ($router) {
    return response()->json([
        "Modulo" => [
            "Nombre" => "Reto Tecnico",
            "Versión" => "1.0",
            "Autor" => "Alonso de Jesus Cauich Viana",
            "Email" => "alonsocauichv1@gmail.com",
            "Telefono" => "9981892988",
            "Github" => "https://github.com/AlonsoCauich/zipcode-app",
            "Api" => "http://challenge.alonsocv.com/api/zip-codes/{zip_code}",
        ]
    ]);
});
