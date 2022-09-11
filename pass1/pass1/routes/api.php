<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ap1\rgcontroller;
use App\Http\Controllers\ap1\datacontroller;

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





Route::post("data",[datacontroller::class,'data']);
Route::post("show",[datacontroller::class,'show']);
Route::post("delete/{id}",[datacontroller::class,'destroy']);





Route::post("rg",[rgcontroller::class,"store"]);
Route::post("lo",[rgcontroller::class,"login"]);
