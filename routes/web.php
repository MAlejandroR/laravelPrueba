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

Route::get("principal", "App\Http\Controllers\Aplicacion@index");
Route::get("dwes", function () {
    return "<h1>Estoy en una página html</h1>";
});
Route::get("dwes1", function () {
    return view("pantalla1");
});

Route::view("about", "about");

Route::get("noticias/{idioma}/principal", function ($idioma) {
    switch ($idioma){
        case "es":
            return "En español";
        case "fr":
            return "En Francais";

    }

})->where('id', '[0-9]+');

Route::get('/', function () {
    return view('layout');
});

Route::fallback(function(){
    return "Esta ruta  no existe";
});

Route::get("about", "App\Http\Controllers\Aplicacion@about");
Route::get("contacta","App\Http\Controllers\Aplicacion@contacta");
Route::get("administracion","App\Http\Controllers\Aplicacion@administracion");
Route::get("noticias","App\Http\Controllers\Aplicacion@noticias");
