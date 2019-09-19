<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|@csrf-->creacion de tokens 

| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    return view('welcome');
    
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');

Route::get('/bienvenida/{nombre}', 'SitioController@bienvenida');


//Route::get('/bienvenida/{nombre}', function($nombre){   //recibe un parametro que se recibe en una variable (en este caso, nombre)
    //return 'Hola mundo';
    //dd($nombre);
    //return view('landing-page')->with(['nombre'=>$nombre]);
    


Route::get('contacto', 'SitioController@contacto')->name('contacto');

    //return 'Hola mundo';
//    return view('landing-page');