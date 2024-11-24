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
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\RegisterController;
use App\Models\Anuncio;
use App\Http\Controllers\Auth\LoginController;




//Route::get('/', function () {
   // return view('welcome');
//});

Route::get('/',[FeedController::class, 'welcome'])->name('welcome');

  //-----------------FEED----------------//

Route::get('/feed/categoria', [FeedController::class, 'categoria'])->name('feed.categoria');
Route::get('/feed/categoria/{id}', [FeedController::class, 'categoriaById'])->name('feed.categoriaById');

Route::get('/feed/autor', [FeedController::class, 'autor'])->name('feed.autor');
Route::get('/feed/autor/{id}', [FeedController::class, 'autorById'])->name('feed.autorById');

Route::get('/feed/anuncio/{id}/comentario', [FeedController::class, 'comentario'])->name('comentario');

Route::post('comentario', [ComentarioController::class, 'store'])->name('comentario.store');

Route::get('/feed/curtida/{id}', [FeedController::class, 'curtida'])->middleware('auth')->name('curtida');

Route::get('/feed/denunciarAnuncio/{id}', [FeedController::class, 'denunciarAnuncio'])->middleware('auth')->name('denunciarAnuncio');

Route::post('/feed/denunciarAnuncio', [FeedController::class, 'denunciarAnuncioStore'])->middleware('auth')->name('denunciarAnuncioStore');

  //-----------------FEED----------------//

  //-----------------VER ANUCIO E CATEGORIA----------------//

Route::get('/anuncio/{id}', [AnuncioController::class, 'show'])->name('anuncio.show');
Route::get('/categoria/{id}',[CategoriaController::class, 'show'])->name('categoria.show');

  //-----------------VER ANUCIO E CATEGORIA----------------//



 //-----------------ESQUECI SENHA ----------------//

Route::get('esqueci-senha', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');

   //-----------------ESQUECI SENHA----------------//


   //-----------------CRIAR CONTA---------------//
Route::get('/', function () {
    return view('welcome'); // Exibe a página inicial
})->name('welcome');




Route::post('/register', [RegisterController::class, 'register']);


Route::get('/register', function () {
    return view('auth.register'); // Exibe o formulário de registro
})->name('register');

Route::post('/register', [RegisterController::class, 'register'])->name('register.store');

Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register']);



   //-----------------CRIAR CONTA---------------//
Auth::routes();

Route::middleware(['auth'])->group(function () {

    Route::get('ModeracaoDenunciaAnuncio',[ModeracaoController::class, 'ModeracaoDenunciaAnuncio'])->name('ModeracaoDenunciaAnuncio');
    Route::get('ModeracaoDenunciaAnuncioAceito/{id}',[ModeracaoController::class, 'ModeracaoDenunciaAnuncioAceito'])->name('ModeracaoDenunciaAnuncioAceito');
    Route::get('ModeracaoDenunciaAnuncioNegado/{id}',[ModeracaoController::class, 'ModeracaoDenunciaAnuncioNegado'])->name('ModeracaoDenunciaAnuncioNegado');


    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');





    //-----------------CATEGORIA----------------//
    Route::middleware(['can:is_admin'])->group(function () {

        Route::get('/categoria', [CategoriaController::class, 'index'])->middleware('can:is_admin')->name('categoria.index');

        Route::get('/categoria/create',[CategoriaController::class, 'create'])->name('categoria.create');

        Route::post('/categoria', [CategoriaController::class,'store'])->name('categoria.store');


        Route::get('/categoria/{id}/edit', [CategoriaController::class, 'edit'])->name('categoria.edit');

        Route::put('/categoria/{id}', [CategoriaController::class, 'update'])->name('categoria.update');

        Route::delete('/categoria/{id}', [CategoriaController::class, 'destroy'])->name('anuncio.destroy');
    });



    //-----------------CATEGORIA----------------



Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');









    //-----------------ANUNCIO----------------//
    Route::get('/anuncio', [AnuncioController::class, 'index'])->name('anuncio.index');

    Route::get('/anuncio/create', [AnuncioController::class, 'create'])->name('anuncio.create');

    Route::post('/anuncio', [AnuncioController::class, 'store'])->name('anuncio.store');

    Route::get('/anuncio/{id}/edit', [AnuncioController::class, 'edit'])->name('anuncio.edit');

    Route::put('/anuncio/{id}', [AnuncioController::class, 'update'])->name('anuncio.update');

    Route::delete('/anuncio/{id}', [AnuncioController::class, 'destroy'])->name('anuncio.destroy');

    //-----------------ANUNCIO----------------









    //-----------------usuario----------------//

    //Route::get('/usuario',[UsuarioController::class, 'index']);

    //-----------------usuario----------------
});
