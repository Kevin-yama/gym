<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class EjerciciosController extends Controller
{
    public function setrutina(){
        // DB::table('users')->insert(
        //     array('email' => 'john@example.com', 'votes' => 0)
        // );
        return '<h1>texto insertado</h1>';
    }
    public function getpectorales(){
        $data = DB::table('ejercicios')->where('parte_cuerpo', 'pectorales')->get();

        // foreach ($data as $user) {
        //     echo $user->id_ejercicio;
        // }

        // return $data ->id_ejercicio;
        //return json_encode($data, JSON_FORCE_OBJECT);

        return view('ejercicios/pectorales', ['datos' => $data]);
        // return view('ejercicios/pectorales', compact('data', 'datos'));


    }
    public function getespalda(){
        $data  = DB::table('ejercicios')->where('parte_cuerpo', 'espalda')->get();
        return view('ejercicios/espalda', ['datos' => $data]);

    }
    public function getpiernas(){
        $data = DB::table('ejercicios')->where('parte_cuerpo', 'pierna')->get();
        return view('ejercicios/piernas', ['datos' => $data]);


    }
    public function getbrazos(){
        $data = DB::table('ejercicios')->where('parte_cuerpo', 'brazos')->get();
        return view('ejercicios/brazos', ['datos' => $data]);
    }
    public function getabdomen(){
        $data  = DB::table('ejercicios')->where('parte_cuerpo','=', 'Abdominales')->get();
        return view('ejercicios/abdomen', ['datos' => $data]);
    }
    public function getgluteo(){
        $data  = DB::table('ejercicios')->where('parte_cuerpo', 'gluteo')->get();
        return view('ejercicios/gluteos', ['datos' => $data]);

    }
}
