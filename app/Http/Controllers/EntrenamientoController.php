<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\rutina;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class EntrenamientoController extends Controller
{
    //
    public function getAvanzado(){
        // $posts = rutina::select('*')
        // ->from('rutinas')
        // ->join('ejercicios', function($query){
        // $query->on('rutinas.ejercicio_1', '=', 'ejercicios.id_ejercicio');
        // })
        // ->get();        
        $posts = DB::table('rutinas')->get();
        // $rutinas = DB::table('rutinas')
        // ->join('ejercicios as tbl1', 'rutinas.ejercicio_1', '=', 'tbl1.id_ejercicio')
        // ->join('ejercicios as tbl2', 'rutinas.ejercicio_2', '=', 'tbl1.id_ejercicio')
        // ->select('*')
        // ->get();
        $rutinas = DB::table('rutinas')
        ->join('ejercicios', function($join)
        {
            $join->on('rutinas.ejercicio_1', '=', 'ejercicios.id_ejercicio')
                ->orOn('rutinas.ejercicio_2', '=', 'ejercicios.id_ejercicio')
                ->orOn('rutinas.ejercicio_3', '=', 'ejercicios.id_ejercicio')
                ->orOn('rutinas.ejercicio_4', '=', 'ejercicios.id_ejercicio');
                
        })
        ->get();

        // return $rutinas;
        // return $posts[0];

        return view('entrenamiento/avanzado');
    }
    public function getPrincipiante(){
        return view('entrenamiento/principiante');

    }


}
