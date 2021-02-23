<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //getHome
    public function getHome() {         
        // return redirect()->action([CatalogController::class,'getIndex']);
        return view('home');
	}
}
