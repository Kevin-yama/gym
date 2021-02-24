<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Http\Controllers\DietasController;
use app\Http\Controllers\EntrenamientoController;
use Illuminate\Support\Facades\DB;

class RutinasController extends Controller
{
    //
    public function perder_peso(){
        $rutina = DB::table('rutinas')
        ->where('nombre','=',"quemar grasa")
        ->get();
        $dieta = DB::table('dieta')
        ->where('nombre','=',"Bajar de peso")
        ->get();
        return 'la diesta a seguir es '. $dieta . " rutina a segir" . $rutina;
    }
    public function definir(){
        $rutina = DB::table('rutinas')
        ->where('nombre','=','definir torso')
        ->get();
        $dieta = DB::table('dieta')
        ->where('nombre','=','Definir(fitness)')
        ->get();
        return 'la diesta a seguir es '. $dieta . " rutina a segir" . $rutina;
    }
    public function hipertrofia(){
        $rutina = DB::table('rutinas')
        ->where('nombre','=','Bisep y Pectoral')
        ->get();
        $dieta = DB::table('dieta')
        ->where('nombre','=','aumentar peso')
        ->get();
        return 'la diesta a seguir es '. $dieta . " rutina a segir" . $rutina;
    }

}
