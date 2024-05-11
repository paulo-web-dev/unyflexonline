<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\ProvasController;
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

Auth::routes();

//Rotas referentes as páginas iniciais
Route::get('/home', [HomeController::class, 'home'])->name('home-ava');
Route::get('/categorias/{slug}', [HomeController::class, 'categoria'])->name('categoria');
Route::get('/recentes', [HomeController::class, 'recentes'])->name('recentes');
Route::get('/favoritos', [HomeController::class, 'favoritos'])->name('favoritos');
Route::get('/assistidos', [HomeController::class, 'assistidos'])->name('assistidos');
Route::get('/script', [HomeController::class, 'script'])->name('script');
Route::get('/logout', [HomeController::class, 'logout'])->name('logout');
//Rotas referentes aos cursos 
Route::get('/curso/{slug}', [CursoController::class, 'curso'])->name('curso');
Route::get('/curso-aula/{slug}/{panel}', [CursoController::class, 'cursoAula'])->name('curso-aula');
Route::get('/pesquisa/cursos/{titulo}', [CursoController::class, 'cursoPesquisa'])->name('curso-pesquisa');
Route::post('/insere/favorito', [CursoController::class, 'insereFavorito'])->name('insere-favorito');

//Rotas Provas 
Route::get('/prova/{slug}', [ProvasController::class, 'prova'])->name('prova');
Route::post('/resultadoProva', [ProvasController::class, 'corrigeProva'])->name('corrige-prova');
Route::get('/certificado/{id}', [ProvasController::class, 'certificado'])->name('certificado');
Route::get('/certificados', [ProvasController::class, 'certificados'])->name('certificados');