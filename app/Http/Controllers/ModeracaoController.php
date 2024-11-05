<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DenunciarAnuncio;
use illuminate\Database\Eloquent\Relations\HasOne;

class ModeracaoController extends Controller
{
    public function ModeracaoDenunciaAnuncio(){
        $denunciaAnuncio = DenunciarAnuncio::orderBy('id', 'DESC')->paginate(10);
        return view('moderacao.denunciaAnuncio', compact('denunciaAnuncio'));
    }

}
