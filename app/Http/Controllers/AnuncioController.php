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
        $anuncios = Anuncio::orderBy('titulo', 'ASC')->get();

        return view('anuncio.anuncio_index', compact('anuncios'));
        //dd('correu tudo bem');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoria::OrderBy('nome', 'ASC')->get();
        return view('anuncio.anuncio_create', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        // 1 - pegar o conteudo do arquivo
       // $content = file_get_contents($request->file('imagem'));


        $validated = $request->validate([
            'categoria_id' => 'required',
          //  'imagem' => 'mimes:jpg,bmp,png',// 2 - validar o tipo do arquivo
            'titulo' => 'required|min:5',
            'conteudo' => 'required|min:5',

        ]);

        $anuncio = new Anuncio();
        $anuncio->categoria_id = $request->categoria_id;
        $anuncio->user_id = Auth::id();
       // $anuncio->imagem = base64_encode($content);// 3 - converter para base64
        $anuncio->titulo = $request->titulo;
        $anuncio->conteudo = $request->conteudo;
        $anuncio->save();

        //dd($request->all());

    return redirect()->route('anuncio.index')->with('mensagem', 'Anuncio cadastrada com sucesso');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //dd('show: ' . $id);
        $anuncio = Anuncio::find($id);
        return view('anuncio.anuncio_show', compact('anuncio'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         //dd('Edit:' . $id);

        $categorias = Categoria::OrderBy('nome', 'ASC')->get();
        $anuncio = Anuncio::find($id);
        return view('anuncio.anuncio_edit', compact('anuncio', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
          // 1 - pegar o conteudo do arquivo
        //$content = file_get_contents($request->file('imagem'));



          //dd($id);
        $validated = $request->validate([
            'categoria_id' => 'required',
           // 'imagem' => 'mimes:jpg,bmp,png',// 2 - validar o tipo do arquivo
            'titulo' => 'required|min:5',
            'conteudo' => 'required|min:5',

        ]);


        $anuncio = Anuncio::find($id);
        $anuncio->categoria_id = $request->categoria_id;
        $anuncio->user_id = Auth::id();
       // $anuncio->imagem = base64_encode($content);// 3 - converter para base64
        $anuncio->titulo = $request->titulo;
        $anuncio->conteudo = $request->conteudo;
        $anuncio->save();

        return redirect()->route('anuncio.index')->with('mensagem', 'Alterado com sucesso');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         // dd('Destroy:' . $id);

        $anuncio = Anuncio::find($id);
        $anuncio->delete();

        return redirect()->route('anuncio.index')->with('mensagem', 'Anuncio excluida com sucesso');

    }
}
