<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comentario;
use Illuminate\Support\Facades\Auth;

class ComentarioController extends Controller
{
    public function store(Request $request){

        $user_id = Auth::id();

        $comentario = new Comentario;
        $comentario->anuncio_id = $request->anuncio_id;
        $comentario->user_id = $user_id;
        $comentario->conteudo = $request->conteudo;
        $comentario->save();

        return back()->withInput();
    }

}
