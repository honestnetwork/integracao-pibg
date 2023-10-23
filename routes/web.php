<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\SiteController;

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

Route::get('/', [SiteController::class,'index']) ->name('site.index');
Route::get('/pessoas', [SiteController::class,'listpessoas']) ->name('site.pessoa.lista');
Route::get('/pessoas/{id}', [SiteController::class,'detailspessoa',]) ->name('site.pessoa.detalhe');
Route::post('/rds/detalhe/{id}', [SiteController::class,'detailsrd',]) ->name('site.rds.detalhe');
Route::get('/cadastrarpessoa', [SiteController::class,'cadastrarpessoa']) ->name('site.pessoa.cadastrar');
