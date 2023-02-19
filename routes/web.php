<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [\App\Http\Controllers\ProjectController::class,'index']);
Route::post("/change_order",[\App\Http\Controllers\ProjectController::class,'change_order']);
Route::post("/delete",[\App\Http\Controllers\ProjectController::class,'destroy']);
Route::post("/add",[\App\Http\Controllers\ProjectController::class,'store']);
Route::post("/update",[\App\Http\Controllers\ProjectController::class,'update']);



