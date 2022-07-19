<?php

use App\Http\Controllers\messageController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
})->name("welcome");

Route::get('/DMPR',[PageController::class,"dmprPage"])->name("dmpr");
Route::get('/intogo',[PageController::class,"intogoPage"])->name("intogo");
Route::post('/message',[messageController::class,"envoyerMessage"])->name("message");;
Route::get('/envoieReussi',[PageController::class,"messageSuccess"])->name("mSuccess");


