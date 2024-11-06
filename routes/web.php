<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AnuncioController;
use App\Http\Controllers\FeedController;
use App\Http\Controllers\ComentarioController;
use App\Models\Categoria;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ModeracaoController;




//Route::get('/', function () {
   // return view('welcome');
//});

Route::get('/',[FeedController::class, 'welcome'])->name('welcome');

Route::get('/feed/categoria', [FeedController::class, 'categoria'])->name('feed.categoria');
Route::get('/feed/categoria/{id}', [FeedController::class, 'categoriaById'])->name('feed.categoriaById');

Route::get('/feed/autor', [FeedController::class, 'autor'])->name('feed.autor');
Route::get('/feed/autor/{id}', [FeedController::class, 'autorById'])->name('feed.autorById');

Route::get('/feed/anuncio/{id}/comentario', [FeedController::class, 'comentario'])->name('comentario');

Route::post('comentario', [ComentarioController::class, 'store'])->name('comentario.store');

Route::get('/feed/curtida/{id}', [FeedController::class, 'curtida'])->middleware('auth')->name('curtida');

Route::get('/feed/denunciarAnuncio/{id}', [FeedController::class, 'denunciarAnuncio'])->middleware('auth')->name('denunciarAnuncio');

Route::post('/feed/denunciarAnuncio', [FeedController::class, 'denunciarAnuncioStore'])->middleware('auth')->name('denunciarAnuncioStore');



Auth::routes();

Route::middleware(['auth'])->group(function () {

    Route::get('ModeracaoDenunciaAnuncio',[ModeracaoController::class, 'ModeracaoDenunciaAnuncio'])->name('ModeracaoDenunciaAnuncio');
    Route::get('ModeracaoDenunciaAnuncioAceito/{id}',[ModeracaoController::class, 'ModeracaoDenunciaAnuncioAceito'])->name('ModeracaoDenunciaAnuncioAceito');
    Route::get('ModeracaoDenunciaAnuncioNegado/{id}',[ModeracaoController::class, 'ModeracaoDenunciaAnuncioNegado'])->name('ModeracaoDenunciaAnuncioNegado');


    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


    //-----------------CATEGORIA----------------//
    Route::middleware(['can:is_admin'])->group(function () {

        Route::get('/categoria', [CategoriaController::class, 'index'])->middleware('can:is_admin')->name('categoria.index');

        Route::get('/categoria/create',[CategoriaController::class, 'create'])->name('categoria.create');

        Route::post('/categoria', [CategoriaController::class,'store'])->name('categoria.store');

        Route::get('/categoria/{id}',[CategoriaController::class, 'show'])->name('categoria.show');

        Route::get('/categoria/{id}/edit', [CategoriaController::class, 'edit'])->name('categoria.edit');

        Route::put('/categoria/{id}', [CategoriaController::class, 'update'])->name('categoria.update');

        Route::delete('/categoria/{id}', [CategoriaController::class, 'destroy'])->name('anuncio.destroy');
    });

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
});
