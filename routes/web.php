<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('evento.index');
})->middleware("auth");

Auth::routes();

Route::group(['middlewere' => ['auth']], function (){
Route::resource('tiempo', \App\Http\Controllers\TiempoController::class)->middleware('auth');
Route::resource('consultor', \App\Http\Controllers\ConsultorController::class)->middleware('auth');
Route::resource('role',\App\Http\Controllers\RoleController::class);
Route::resource('user',\App\Http\Controllers\UserController::class);
Route::get('/evento', [App\Http\Controllers\EventoController::class, 'index']);
Route::post('/evento/mostrar', [App\Http\Controllers\EventoController::class, 'show']);
Route::post('/evento/agregar', [App\Http\Controllers\EventoController::class, 'store']);
Route::post('/evento/editar/{id}', [App\Http\Controllers\EventoController::class, 'edit']);
Route::post('/evento/actualizar/{evento}', [App\Http\Controllers\EventoController::class, 'update']);
Route::post('/evento/borrar/{id}', [App\Http\Controllers\EventoController::class, 'destroy']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

});