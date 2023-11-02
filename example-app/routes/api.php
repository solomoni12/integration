<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testController;
use App\Http\Controllers\deviceController;
use App\Http\Controllers\TestConfigController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// public route
Route::post('/registerdevice', [deviceController::class, 'registerDevice']);
Route::resource('/devices',deviceController::class);
Route::resource('/tests',testController::class);
Route::resource('/configs',TestConfigController::class);

Route::post('/devices/{deviceId}/tests', [testController::class,'store']);
Route::get('/devices/{workerId}/tests', [testController::class, 'index']);

