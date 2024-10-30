<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anuncio;
use App\Models\Categoria;
use App\Models\User;

class FeedController extends Controller
{

    public function welcome(){
        $anuncios = Anuncio::orderBy('id', 'DESC')->get();
        return view('welcome', compact('anuncios'));
    }

    public function categoria(){
        $categorias = Categoria::orderBy('nome', 'ASC')->get();
        return view('feed.categoria', compact('categorias'));
    }

    public function categoriaById($id){
        $anuncios = Anuncio::where('categoria_id', $id)->orderBy('id', 'DESC')->get();
        return view('feed.categoriaById', compact('anuncios'));
    }

    public function autor(){
        $autores = User::orderBy('name', 'ASC')->get();
        return view('feed.autor', compact('autores'));
    }

    public function autorById($id){
        $anuncios = Anuncio::where('user_id', $id)->orderBy('id', 'DESC')->get();
        return view('feed.autorById', compact('anuncios'));
    }

}
