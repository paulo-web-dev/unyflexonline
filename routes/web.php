<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
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

//ROTAS REFERENTES AO SITE INSTITUCIONAL 

Route::get('/', [IndexController::class, 'home'])->name('home');
Route::get('/assinatura', [IndexController::class, 'assinatura'])->name('assinatura');
