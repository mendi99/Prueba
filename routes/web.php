<?php

use App\Http\Controllers\PruebaController;
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

/*
Route::view('/', 'kaixo', ['User' => 'Iñaki Perurena']);

Route::get('puff', PruebaController::class);
/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    return view('about');
});


Route::get('products', function () {
    return view('products');
});


Route::get('services', function () {
    return view('services');
});

Route::get('dashboard', function () {
    return view('dashboard');
});

Route::get('users/{name?}', function ($name = 'Joxe Mari Olasagasti') {
    return $name;
});

Route::prefix('products')->group(function () {
    Route::get('/', function () {
        return view('products');
    });
    Route::get('users', function () {
        return view('users');
    });
});
*/

Route::get('/vuelo/create', function () {
    return view('createvuelo');
});

Route::post('/vuelo/create', [\App\Http\Controllers\VueloController::class, 'store']);

Route::get('/vuelo', [\App\Http\Controllers\VueloController::class, 'index']);

Route::get('/pasajero/create', function () {
    return view('createpasajero');
});

Route::post('/pasajero/create', [\App\Http\Controllers\PasajeroController::class, 'store']);

Route::get('/pasajero', [\App\Http\Controllers\PasajeroController::class, 'index']);

Route::get('/lista', [\App\Http\Controllers\PasajeroController::class, 'lista']);

Route::post('/lista', [\App\Http\Controllers\PasajeroController::class, 'relation']);

Route::delete('/lista/{pasaId}/{vueloId}', [\App\Http\Controllers\PasajeroController::class, 'destroyRel']);