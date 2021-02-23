<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntrenamientoController extends Controller
{
    //
    public function getAvanzado(){
        return view('entrenamiento.avanzado');
    }
    public function getPrincipiante(){
        return view('entrenamiento.principiante');

    }


}
