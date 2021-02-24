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
        // return view('auth/login');
        // return view('home');
        return view('ejercicios/pectorales');
    }
    public function getespalda(){
        $data  = DB::table('ejercicios')->where('parte_cuerpo', 'espalda')->get();        
        return view('ejercicios/espalda');

    }
    public function getpiernas(){
        $data = DB::table('ejercicios')->where('parte_cuerpo', 'pierna')->get();
        return view('ejercicios/piernas');

    }
    public function getbrazos(){
        $data = DB::table('ejercicios')->where('parte_cuerpo', 'brazos')->get();
        
        return view('ejercicios/brazos');
    }
    public function getabdomen(){
        $data  = DB::table('ejercicios')->where('parte_cuerpo','=', 'Abdominales')->get();
        return view('ejercicios/abdomen');
        


    }
    public function getgluteo(){
        $data  = DB::table('ejercicios')->where('parte_cuerpo', 'gluteo')->get();
        
        return view('ejercicios/gluteo');

    }
}
