<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DenunciarAnuncio;
use App\Models\Anuncio;
use illuminate\Database\Eloquent\Relations\HasOne;

class ModeracaoController extends Controller
{
    public function ModeracaoDenunciaAnuncio(){
        $denunciaAnuncio = DenunciarAnuncio::orderBy('id', 'DESC')->paginate(10);
        return view('moderacao.denunciaAnuncio', compact('denunciaAnuncio'));
    }

    public function ModeracaoDenunciaAnuncioAceito($id){

        $denunciaAnuncio = DenunciarAnuncio::find($id);
        $denunciaAnuncio->status = 'ACEITO';
        $denunciaAnuncio->save();

        $anuncio = Anuncio::find($denunciaAnuncio->anuncio_id);
        $anuncio->status = 0;
        $anuncio->save();

        return redirect()->route('ModeracaoDenunciaAnuncio')->with('mensagem', 'Denúncia aceita com sucesso!');
    }


    public function ModeracaoDenunciaAnuncioNegado($id){
        $denunciaAnuncio = DenunciarAnuncio::find($id);
        $denunciaAnuncio->status = 'NEGADO';
        $denunciaAnuncio->save();

        return redirect()->route('ModeracaoDenunciaAnuncio')->with('mensagem', 'Denúncia negada com sucesso!');
    }


}
