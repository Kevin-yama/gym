<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DietasController;
use App\Http\Controllers\EjerciciosController;
use App\Http\Controllers\EntrenamientoController;
use App\Http\Controllers\RutinasController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/home', [HomeController::class,'getHome']);

// contorladores rutas entrenamiento

Route::get('/entrenamiento/avanzado', [EntrenamientoController::class,'getAvanzado']);
Route::get('/entrenamiento/principiante', [EntrenamientoController::class,'getPrincipiante']);

// ejercicios
Route::get('/ejercicios/pectorales', [EjerciciosController::class,'getpectorales']);
Route::get('/ejercicios/espalda', [EjerciciosController::class,'getespalda']);
Route::get('/ejercicios/piernas', [EjerciciosController::class,'getpiernas']);
Route::get('/ejercicios/brazos', [EjerciciosController::class,'getbrazos']);
Route::get('/ejercicios/abdomen', [EjerciciosController::class,'getabdomen']);
Route::get('/ejercicios/gluteos', [EjerciciosController::class,'getgluteo']);


Route::get('/rutina/perder-peso', [RutinasController::class,'perder_peso']);
Route::get('/rutina/definir', [RutinasController::class,'definir']);
Route::get('/rutina/hipertrofia', [RutinasController::class,'hipertrofia']);

ROUTE::get('/dietas',[DietasController::class,'dieta']);
// ROUTE::get('/dietas/aumentar',[DietasController::class,'aumentar']);
// ROUTE::get('/dietas/bajar',[DietasController::class,'bajar']);
// ROUTE::get('/dietas/definir',[DietasController::class,'estable']);

Route::get('/', function()
{
    return view('auth.login');
});
// ---------------------------------------------------

// ---------------------------------------------------

Route::get('/catalog/show/{id}', [CatalogController::class,'getShow']);
// ---------------------------------------------------
Route::get('catalog/edit/{id}', [CatalogController::class,'getEdit']);
// ---------------------------------------------------

