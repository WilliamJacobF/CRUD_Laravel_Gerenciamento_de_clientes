<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\TesteController;
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

Route::get('/', [TesteController::class, 'index'])->name('clientes-index');
Route::get('/create', [TesteController::class, 'create'])->name('clientes-create');
Route::post('/', [TesteController::class, 'store'])->name('clientes-store');
Route::get('/{id}/edit', [TesteController::class, 'edit'])->where('id', '[0-9]+')->name('clientes-edit');
Route::put('/{id}', [TesteController::class, 'update'])->where('id', '[0-9]+')->name('clientes-update');
Route::delete('/{id}', [TesteController::class, 'destroy'])->where('id', '[0-9]+')->name('clientes-destroy');



