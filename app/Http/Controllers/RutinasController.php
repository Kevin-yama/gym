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
        return view('rutinas.bajar', ['dieta' => $dieta,'rutina' =>$rutina]);
    }
    public function definir(){
        $rutina = DB::table('rutinas')
        ->where('nombre','=','definir torso')
        ->get();
        $dieta = DB::table('dieta')
        ->where('nombre','=','Definir(fitness)')
        ->get();
        return view('rutinas.estable', ['dieta' => $dieta,'rutina' =>$rutina]);
    }
    public function hipertrofia(){
        $rutina = DB::table('rutinas')
        ->where('nombre','=','Bisep y Pectoral')
        ->get();
        $dieta = DB::table('dieta')
        ->where('nombre','=','aumentar peso')
        ->get();
        return view('rutinas.aumentar', ['dieta' => $dieta,'rutina' =>$rutina]);
    }

}
