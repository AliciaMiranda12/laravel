<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogAcessoMiddleware;
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

Route::get('/', [App\Http\Controllers\Principal::class, 'principal'])->name('principal'); // '/' uma raiz, get(recuperar)
Route::get('/sobre', [App\Http\Controllers\Principal::class, 'sobre'])->name('sobre'); // '/' uma raiz, get(recuperar)
Route::get('/contato', [App\Http\Controllers\Principal::class, 'contato'])->name('contato'); // '/' uma raiz, get(recuperar)
Route::get('/administracao', [App\Http\Controllers\Principal::class, 'administracao'])->name('administracao'); // '/' uma raiz, get(recuperar)
Route::get('/meio-ambiente', [App\Http\Controllers\Principal::class, 'meioAmbiente'])->name('meioAmbiente'); // '/' uma raiz, get(recuperar)
Route::get('/desenvolvimento-sistemas', [App\Http\Controllers\Principal::class, 'desenvolvimentoSistemas'])->name('desenvolvimentoSistemas'); // '/' uma raiz, get(recuperar)





