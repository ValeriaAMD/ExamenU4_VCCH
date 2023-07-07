<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/clientitos',[ClienteController::class,'index']);
Route::post('/clientitos',[ClienteController::class,'store']);
Route::get('/clientitos/{id}',[ClienteController::class,'show']);
Route::put('/clientitos/{id}',[ClienteController::class,'update']);
Route::delete('/clientitos/{id}',[ClienteController::class,'destroy']);