<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TurnosController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

//Rutas para el crud de los turnos
Route::get('/turnos', [TurnosController::class, 'index']);
Route::post('/turnos', 'App\Http\Controllers\TurnosController@store');
Route::put('/turnos/{id}', 'App\Http\Controllers\TurnosController@update');
Route::delete('/turnos/{id}', 'App\Http\Controllers\TurnosController@destroy');

Route::get('/', [TurnosController::class, 'index']);
