<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anuncio;
use App\Models\Categoria;
use App\Models\User;
use App\Models\Curtida;
use App\Models\denunciarAnuncio;


use Illuminate\Support\Facades\Auth;


class FeedController extends Controller
{

    public function welcome(){
        $anuncios = Anuncio::where('status', 1)->orderBy('id', 'DESC')->get();
        return view( 'welcome', compact('anuncios'));
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

    public function comentario($id){
        $anuncio = Anuncio::find($id);
        return view('feed.comentario', compact('anuncio'));
    }

    public function curtida($id){

        $user_id = Auth::id();

        $curtida_exist = Curtida::where('anuncio_id', $id)->where('user_id', $user_id)->exists();

        if(!$curtida_exist){
            $curtida= new Curtida();
            $curtida->anuncio_id = $id;
            $curtida->user_id = $user_id;
            $curtida->save();
        }else{
            $curtida = Curtida::where('anuncio_id', $id)->where('user_id', $user_id)->first();
            $curtida->delete();
        }

        return back()->withInput();

    }
    public function favoritos()
    {
        $user_id = Auth::id();
        $curtidas = Curtida::with('anuncio')->where('user_id', $user_id)->get();

        return view('feed.favoritos', ['curtidas' => $curtidas]);
    }



    public function denunciarAnuncio($id){
        $anuncio = Anuncio::find($id);
        return view('feed.denunciarAnuncio', compact('anuncio'));
    }

    public function denunciarAnuncioStore(Request $request){

        $request->validate([
            'anuncio_id' => 'required|exists:anuncios,id',
            'conteudo' => 'required|string|min:10',
        ]);


        $user_id = Auth::id();

        $DenunciarAnunciar = new DenunciarAnuncio;
        $DenunciarAnunciar->anuncio_id = $request->anuncio_id;
        $DenunciarAnunciar->user_id = $user_id;
        $DenunciarAnunciar->conteudo = $request->conteudo;
        $DenunciarAnunciar->save();

        return redirect(url('/'))->with('mensagem', 'Denúncia enviada com sucesso!');
    }

}
