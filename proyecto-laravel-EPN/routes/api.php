<?php

use Illuminate\Http\Request;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

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


    //Loguearse
    Route::post('/log', [UsuarioController::class,'log']);


    /*Obtener Requerimiento
    Route::get('/req',[UsuarioController::class,'verReq']);*/

      //agregar Requerimiento
      Route::post('/addReq',[UsuarioController::class,'crear']);






