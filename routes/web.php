<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DietasController;
use App\Http\Controllers\EjerciciosController;
use App\Http\Controllers\EntrenamientoController;
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

// contorladores rutas entrenamienti

Route::get('/entrenamiento/avanzado', [EntrenamientoController::class,'getAvanzado']);

Route::get('/entrenamiento/principiante', [EntrenamientoController::class,'getPrincipiante']);

// Route::get('/login', function () {
//     return 'home';
// });
// Route::get('/', [HomeController::class,'getHome']);
// ---------------------------------------------------
// Route::get('login', function()
// {
//     return view('auth.login');
// });
// ---------------------------------------------------
Route::get('/', function()
{
    return view('auth.login');
});
// ---------------------------------------------------
Route::get('catalog', [CatalogController::class,'getIndex']);
// ---------------------------------------------------
//Route::get('/catalog/show/{id}', 'CatalogController@getShow');
Route::get('/catalog/show/{id}', [CatalogController::class,'getShow']);
// ---------------------------------------------------
Route::get('/catalog/create/', [CatalogController::class,'getCreate']);
// ---------------------------------------------------
Route::get('catalog/edit/{id}', [CatalogController::class,'getEdit']);
// ---------------------------------------------------
Route::post('/catalog/create/', [CatalogController::class,'getCreate']);
