<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anuncio;
use App\Models\Categoria;

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

}