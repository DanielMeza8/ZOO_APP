<?php

use App\Http\Controllers\AnimalesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ZoologicosController;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Return_;

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

Route::get('/login', function () {
    return view('welcome');
});


Route::get('/', function () {
    return view('index');
})->name('inicioZOO');

Route::get('/registro', function () {
    return view('registro');
});

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/login', [LoginController::class, 'login'])->name('iniciar');
Route::post('/validar_registro', [LoginController::class, 'registro'])->name('validar_registro');



Route::prefix('zoologicos')->group(function(){
    Route::get('/Inicio', [ZoologicosController::class, 'index'])->middleware('auth')->name('zoologicos.index');
    Route::get('/Agregar', [ZoologicosController::class, 'create'])->name('zoologicos.create');
    Route::post('/Guardar', [ZoologicosController::class, 'store'])->name('zoologicos.store');
    Route::get('Editar/{id}', [ZoologicosController::class, 'edit'])->name('zoologicos.edit');
    Route::put('/Actualizar/{id}', [ZoologicosController::class, 'update'])->name('zoologicos.update');
    Route::get('/Eliminar/{id}', [ZoologicosController::class, 'show'])->name('zoologicos.show');
    Route::delete('/Destruir/{id}', [ZoologicosController::class, 'destroy'])->name('zoologicos.destroy');
});

Route::prefix('animales')->group(function(){
    Route::get('/Inicio{id}', [AnimalesController::class, 'index'])->name('animales.index');
    Route::get('/Agregar/{id}', [AnimalesController::class, 'create'])->name('animales.create');
    Route::post('/Guardar/{id}', [AnimalesController::class, 'store'])->name('animales.store');
    Route::get('Editar/{id}', [AnimalesController::class, 'edit'])->name('animales.edit');
    Route::put('/Actualizar/{id}', [AnimalesController::class, 'update'])->name('animales.update');
    Route::get('/Eliminar/{id}', [AnimalesController::class, 'show'])->name('animales.show');
    Route::delete('/Destruir/{id}', [AnimalesController::class, 'destroy'])->name('animales.destroy');
});

Route::prefix('zoo')->group(function(){
    Route::get('/Inicio/{pais}', [ZoologicosController::class, 'zooindex'])->name('zoo.index');
});

Route::prefix('animals')->group(function(){
    Route::get('/Inicio{id}', [AnimalesController::class, 'inicio'])->name('animals.inicio');
});