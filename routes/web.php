<?php

use App\Http\Controllers\ContactoController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\ReservasController;
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

Route::get('', function () {
    return view('index');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/formlogin', function () {
    return view('formlogin');
});

Route::get('/formregister', function () {
    return view('formregister');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/reserva', function () {
    return view('reserva');
});
Route::get('/try', function () {
    return view('home');
});
Route::get('/horasdisponibles', function () {
    return view('horasdisponibles');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/misreservas', [ReservaController::class, 'showUserAll']);
Route::get('/reserva', [ReservaController::class, 'showAll']);

Route::get('/contacto', function () {
    return view('contacto');
});

Route::post('/contacto', [ContactoController::class,'store']);
Route::get('/reservastore', [ReservasController::class, 'store']);
