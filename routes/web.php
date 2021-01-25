<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|*/

Route::view('/', 'home');

Route::any('exam1',[TestController::class,'exam1']);
Route::view('question','question');
Route::view('result','result');
Route::any('note',[TestController::class,'note']);