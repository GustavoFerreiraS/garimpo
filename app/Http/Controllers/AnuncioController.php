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
        $anuncios = Anuncio::orderBy('titulo', 'DESC')->get();
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
        $validated = $request->validate([
            'categoria_id' => 'required',
            'titulo' => 'required|min:5',
            'conteudo' => 'required|min:5',

        ]);
        $anuncio = new Anuncio();
        $anuncio->categoria_id = $request->categoria_id;
        $anuncio->user_id = Auth::id();
        $anuncio->titulo = $request->titulo;
        $anuncio->conteudo = $request->conteudo;
        $anuncio->save();

        //dd($request->all());

    return redirect()->route('anuncio_index')->with('mensagem', 'Anuncio cadastrada com sucesso');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //dd('show: ' . $id);
        $anuncio = Anuncio::find($id);
        return view('anuncios.anuncios_show', compact('anuncio'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         //dd('Edit:' . $id);

        $anuncios = Anuncio::find($id);
        return view('anuncios.anuncios_edit', compact('anuncios'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
          //dd($id);
        $validated = $request->validate([
            'titulo' => 'required|min:5',

        ]);


        $anuncios = Anuncio::find($id);
        $anuncio->anuncio = $request->anuncio;
        $anuncio->save();

        return redirect()->route('an$anuncio.index')->with('mensagem', 'Anuncio criada com sucesso');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         // dd('Destroy:' . $id);

        $anuncio = Anuncio::find($id);
        $anuncio->delete();

        return redirect()->route('an$anuncio.index')->with('mensagem', 'Anuncio excluida com sucesso');

    }
}
