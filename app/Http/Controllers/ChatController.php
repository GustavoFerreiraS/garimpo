<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mensagem;
use App\Models\Anuncio;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function show($anuncioId)
    {
        // Recupera o anúncio com base no ID
        $anuncio = Anuncio::findOrFail($anuncioId);

        // Recupera todas as mensagens relacionadas ao anúncio
        $mensagens = Mensagem::where('anuncio_id', $anuncioId)
                            ->orderBy('created_at', 'asc')
                            ->get();

        // Retorna a view com o anúncio e as mensagens
        return view('chat.show', compact('anuncio', 'mensagens'));
    }

    public function sendMessage(Request $request, $anuncioId)
    {
        // Validação para garantir que a mensagem não seja vazia
        $request->validate([
            'conteudo' => 'required|string|max:1000',
        ]);

        $userId = Auth::id();
        $anuncio = Anuncio::findOrFail($anuncioId);

        // Cria uma nova mensagem e salva no banco de dados
        $mensagem = new Mensagem();
        $mensagem->anuncio_id = $anuncioId;
        $mensagem->de_user_id = $userId;
        $mensagem->para_user_id = $anuncio->user_id; // O dono do anúncio
        $mensagem->conteudo = $request->conteudo;
        $mensagem->save();

        // Redireciona de volta para a página do chat
        return back();
    }
}
