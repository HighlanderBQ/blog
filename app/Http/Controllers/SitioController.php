<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitioController extends Controller
{
    //
    public function bienvenida($nombre){
        $nombre=strtoupper($nombre);
    
    return view(('landing-page'), compact('nombre'));//<- busca alguna variable dentro de la funcion
    }

    public function contacto(){
        return view('contacto');
    }

    public function guardaContacto(Request $request){
        //datos que se reciben del formulario
        dd('llego a guardar (muero aqui)');

    }
}
