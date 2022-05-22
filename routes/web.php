<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataBukuController;
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

Route::get('/', [DataBukuController::class,'index']);

Route::get('/create',[DataBukuController::class,'create']);
Route::get('/welcome',[DataBukuController::class,'welcome']);
Route::get('/masuk',[DataBukuController::class,'index']);
Route::get('/back',[DataBukuController::class,'index']);
Route::post('/store',[DataBukuController::class,'store']);
Route::get('/show/{id}',[DataBukuController::class,'show']);
Route::post('/update/{id}',[DataBukuController::class,'update']);
Route::get('/destroy/{id}',[DataBukuController::class,'destroy']);
Route::post('/search',[DataBukuController::class,'search'])->name('searchEngine');