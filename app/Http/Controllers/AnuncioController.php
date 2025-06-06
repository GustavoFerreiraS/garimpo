<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anuncio;
use App\Models\Categoria;
use Illuminate\Support\Facades\Auth;

class AnuncioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user_id = Auth::user()->id;
        $anuncios = Anuncio::where('user_id' , $user_id)->orderBy('titulo', 'ASC')->get();

        return view('anuncio.anuncio_index', compact('anuncios'));
        //dd('correu tudo bem');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
     // Carregar categorias para o dropdown
    $categorias = Categoria::orderBy('nome', 'ASC')->get();
    return view('anuncio.anuncio_create', compact('categorias'));
}

    public function store(Request $request)
    {

    $content = file_get_contents($request->file('imagem'));

    $validated = $request->validate([
        'categoria_id' => 'required',
        'imagem' => 'mimes:jpg,bmp,png',// 2 - validar o tipo do arquivo
        'titulo' => 'required|min:5',
        'conteudo' => 'required|min:5',
    ]);


    $anuncio = new Anuncio();
    $anuncio->categoria_id = $request->categoria_id;
    $anuncio->user_id = Auth::id();
    $anuncio->imagem = base64_encode($content);
    $anuncio->titulo = $request->titulo;
    $anuncio->conteudo = $request->conteudo;
    $anuncio->save();

    return redirect()->route('anuncio.index')->with('mensagem', 'Anúncio criado com sucesso!');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $anuncio = Anuncio::find($id);
        return view('anuncio.anuncio_show', compact('anuncio'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user_id = Auth::user()->id;
        $doUsuario = Anuncio::where('id', $id)->where('user_id' , $user_id)->exists();
        if(!$doUsuario){
            return redirect()->route('anuncio.index')->with('mensagem', ' Você não tem permissão para alterar essa postagem');

        }

        $categorias = Categoria::OrderBy('nome', 'ASC')->get();
        $anuncio = Anuncio::find($id);
        return view('anuncio.anuncio_edit', compact('anuncio', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $user_id = Auth::user()->id;
        $doUsuario = Anuncio::where('id', $id)->where('user_id , $user_id')->exists();
        if(!$doUsuario){
            return redirect()->route('anuncio.index')->with('mensagem', ' Você não tem permissão para alterar essa postagem');

          // 1 - pegar o conteudo do arquivo
        if($request->file('imagem')){
                $content = file_get_contents($request->file('imagem'));
        }


          //dd($id);
        $validated = $request->validate([
            'categoria_id' => 'required',
            'imagem' => 'mimes:jpg,bmp,png',// 2 - validar o tipo do arquivo
            'titulo' => 'required|min:5',
            'conteudo' => 'required|min:5',

        ]);


        $anuncio = Anuncio::find($id);
        $anuncio->categoria_id = $request->categoria_id;
        $anuncio->user_id = Auth::id();
        if($request->file('imagem')){
            $anuncio->imagem = base64_encode($content);
        }

        $anuncio->titulo = $request->titulo;
        $anuncio->conteudo = $request->conteudo;
        $anuncio->save();

        return redirect()->route('anuncio.index')->with('mensagem', 'Alterado com sucesso');

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    //
    public function destroy(string $id)
    {
        $anuncio = Anuncio::find($id);
        $anuncio->delete();

        return redirect()->route('anuncio.index')->with('mensagem', 'Anuncio excluida com sucesso');

    }
    public function vendedoresDaSemana()
{
    $anuncios = Anuncio::with('autor') // Carrega os usuários relacionados
        ->whereHas('autor', function ($query) {
            $query->whereBetween('id', [3, 7]); // Filtra IDs entre 3 e 7
        })
        ->orderBy('id', 'DESC') // Ordenação opcional
        ->get();

    return view('welcome', compact('anuncios'));
}



}
