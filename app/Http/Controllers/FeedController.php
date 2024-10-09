<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anuncio;

class FeedController extends Controller
{

    public function welcome(){
        $anuncios = Anuncio::orderBy('id', 'DESC')->get();
        return view('welcome', compact('anuncios'));
    }
    
}