<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MedicinesController;
use App\Http\Middleware\Authenticate;
use App\Http\Controllers\OrderController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'auth:sanctum'], function(){
    Route::post('register', [UserController::class, 'register']);
    Route::get('login', [UserController::class, 'login']);
    Route::get('logout', [UserController::class, 'logout']);
    });
   


Route::get('logout/{id}', [UserController::class, 'logout']);
Route::post('AddMedicine', [MedicinesController::class, 'AddMedicine']);
Route::get('showmedi/{type}', [MedicinesController::class, 'showmedi']);
Route::get('showonlymedi/{id}', [MedicinesController::class, 'showonlymedi']);
Route::post('createOrder', [OrderController::class, 'createOrder']);
Route::get('showorder', [OrderController::class, 'showorder']);
Route::get('showall', [MedicinesController::class, 'showall']);
Route::post('EditOrder/{id}', [OrderController::class, 'EditOrder']);
