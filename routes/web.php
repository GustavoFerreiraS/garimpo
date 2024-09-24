<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AnuncioController;

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
    return view('welcome');
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




//-----------------CATEGORIA----------------//
Route::get('/categoria', [CategoriaController::class, 'index'])->name('categoria.index');

Route::get('/categoria/create',[CategoriaController::class, 'create'])->name('categoria.create');

Route::post('/categoria', [CategoriaController::class,'store'])->name('categoria.store');

Route::get('/categoria/{id}',[CategoriaController::class, 'show'])->name('categoria.show');
//-----------------CATEGORIA----------------








//-----------------ANUNCIO----------------//
Route::get('/anuncio', [AnuncioController::class, 'index'])->name('anuncio.index');

Route::get('/anuncio/create', [AnuncioController::class, 'create'])->name('anuncio.create');

Route::post('/anuncio', [AnuncioController::class, 'store'])->name('anuncio.store');

Route::get('/anuncio/{id}', [AnuncioController::class, 'show'])->name('anuncio.show');

Route::get('/anuncio/{id}/edit', [AnuncioController::class, 'edit'])->name('anuncio.edit');

Route::put('/anuncio/{id}', [AnuncioController::class, 'update'])->name('anuncio.update');

Route::delete('/anuncio/{id}', [AnuncioController::class, 'destroy'])->name('anuncio.destroy');



//-----------------ANUNCIO----------------









//-----------------usuario----------------//

//Route::get('/usuario',[UsuarioController::class, 'index']);

//-----------------usuario----------------

