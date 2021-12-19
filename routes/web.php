<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FinancialController;
use App\Http\Controllers\FinancialPlayersController;
use App\Http\Controllers\LaborValueController;

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

Route::get('/',[FinancialController::class,'index']);
Route::post('/save',[FinancialController::class,'store']);
Route::post('/update',[FinancialController::class,'update']);
Route::get('/delete/{id}',[FinancialController::class,'destroy']);

Route::post('/players/save',[FinancialPlayersController::class,'store']);
Route::post('/players/update',[FinancialPlayersController::class,'update']);
Route::get('/players/delete/{id}',[FinancialPlayersController::class,'destroy']);

Route::post('/labor-value/save',[LaborValueController::class,'store']);
Route::post('/labor-value/update',[LaborValueController::class,'update']);
Route::post('/labor-value/delete',[LaborValueController::class,'update']);
