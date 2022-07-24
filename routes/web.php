<?php

use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/servicio',function(){
    return view('/servicio/servicios');
})->name('servicios');
Route::get('/user',function(){
    return view('/user/users');
})->name('users');
//mi pagina
Route::get('/pagina',function(){
    return view('/pagina/principal');
});

Route::resource('servicios','App\Http\Controllers\ServicioController');
Route::resource('users','App\Http\Controllers\UsuarioController');