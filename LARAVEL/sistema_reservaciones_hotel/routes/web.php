<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientController;
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
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::middleware(['auth'])->group(function(){
    Route::get('users/', [ UserController::class, 'index']);
    Route::get('users/create', [ UserController::class, 'create']);
    Route::get('users/{id}', [ UserController::class, 'show']);
    Route::post('users/', [ UserController::class, 'store']);
});


Route::get('clients/', [ ClientController::class, 'index']);
Route::get('clients/create', [ ClientController::class, 'create']);
Route::get('clients/{id}', [ ClientController::class, 'show']);
Route::post('clients/', [ ClientController::class, 'store']);

/* Route::get('/saludo', function () {
    return "Hola mundo ";
});

Route::get('/saludo/{name}', function ($name) {
    return "Hola " . $name;
});

// Recibir varios parametros
Route::get('/suma/{num1}/{num2}', function ($num1, $num2) {
     
    return $num1 + $num2;
})->where(['num1' => '[0-9]+', 'num2' => '[0-9]+']);

Route::get('multiplicacion/{num1}/{num2}/{num3?}', function ($num1, $num2, $num3 = 1) {
    return $num1 * $num2 * $num3;
}); */