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
Route::resource('role',\App\Http\Controllers\RoleController::class)->middleware('auth');
Route::resource('user',\App\Http\Controllers\UserController::class)->middleware('auth');
Route::get('/evento', [App\Http\Controllers\EventoController::class, 'index'])->middleware('auth');
Route::post('/evento/mostrar', [App\Http\Controllers\EventoController::class, 'show'])->middleware('auth');
Route::post('/evento/agregar', [App\Http\Controllers\EventoController::class, 'store'])->middleware('auth');
Route::post('/evento/editar/{id}', [App\Http\Controllers\EventoController::class, 'edit'])->middleware('auth');
Route::post('/evento/actualizar/{evento}', [App\Http\Controllers\EventoController::class, 'update'])->middleware('auth');
Route::post('/evento/borrar/{id}', [App\Http\Controllers\EventoController::class, 'destroy'])->middleware('auth');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/migraciones', function () {return \Artisan::call('migrate:fresh --seed')."Se han ejecutado las migrciones";})->middleware('auth');

});