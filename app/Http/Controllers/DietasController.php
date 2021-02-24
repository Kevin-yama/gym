<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class DietasController extends Controller
{
    //
    public function dieta(){
        $data = DB::table('dieta')->get();
        return view('dietas.dieta', ['datos' => $data]);
    }
    public function aumentar(){
        $dieta = DB::table('dietas')->where('nombre', 'aumentar peso')->first();
        $ejercicio = DB::table('ejercicios')->where('nombre', 'flexiones')->first();
        return view('dietas.aumentar', ['dieta' => $dieta,'ejercicios' =>$ejercicio]);

    }
    public function bajar(){
        $dieta = DB::table('dietas')->where('nombre', 'Bajar de peso')->first();
        $ejercicio = DB::table('ejercicios')->where('nombre', 'flexiones')->first();
        return view('dietas.bajar', ['dieta' => $dieta,'ejercicios' =>$ejercicio]);
    }
    public function estable(){
        $dieta = DB::table('dietas')->where('nombre', 'Definir(fitness)')->first();
        $ejercicio = DB::table('ejercicios')->where('nombre', 'flexiones')->first();
        return view('dietas.estable', ['dieta' => $dieta,'ejercicios' =>$ejercicio]);
    }
}
