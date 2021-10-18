<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/depositary', [\App\Http\Controllers\DepositaryController::class,'depositary']);

Route::get('/guide', [\App\Http\Controllers\GuideController::class,'guide']);

Route::post('/guide/support', [\App\Http\Controllers\GuideController::class,'support']);