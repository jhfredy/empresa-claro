<?php

use Illuminate\Http\Request;

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
//CRUD de usuarios
Route::resource('usuarios', 'UserController',[
    'only'=>['index','store','update','destroy'],
]);


Route::resource('servicio', 'ServicioController', [
    'only' => ['index']
]);