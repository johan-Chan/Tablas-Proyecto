<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\EstudioController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\TipoContratoController;
use App\Http\Controllers\ContratoController;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/estudio/create', [EstudioController::class, 'create'])->name('estudio.form');
Route::post('/estudio', [EstudioController::class, 'store'])->name('estudios.store');
Route::get('/estudioT', [EstudioController::class, 'index'])->name('estudios.tablaE');

Route::get('/departamentoT', [DepartamentoController::class, 'index'])->name('departamentos.tablaD');
Route::get('/departamento/create', [DepartamentoController::class, 'create'])->name('departamentos.formD');
Route::post('/departamento', [DepartamentoController::class, 'store'])->name('departamento.store');

Route::get('/tipo-contratoT', [TipoContratoController::class, 'index'])->name('tipo_contrato.index');
Route::get('/tipo-contrato/create', [TipoContratoController::class, 'create'])->name('tipo_contrato.create');
Route::post('/tipo-contrato', [TipoContratoController::class, 'store'])->name('tipo_contrato.store');

Route::get('/contratoT', [ContratoController::class, 'index'])->name('contratos.tablaC');
Route::get('/contrato/create', [ContratoController::class, 'create'])->name('contratos.formC');
Route::post('/contrato', [ContratoController::class, 'store'])->name('contrato.store');
