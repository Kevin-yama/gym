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
        $data = DB::table('dietas')->where('nombre', 'aumentar peso')->first();
        return view('dietas.aumentar', ['datos' => $data]);

    }
    public function bajar(){
        $data = DB::table('dietas')->where('nombre', 'Bajar de peso')->first();
        return view('dietas.bajar', ['datos' => $data]);
    }
    public function estable(){
        $data = DB::table('dietas')->where('nombre', 'Definir(fitness)')->first();
        return view('dietas.estable', ['datos' => $data]);
    }
}
