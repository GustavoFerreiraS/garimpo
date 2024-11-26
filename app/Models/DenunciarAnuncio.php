<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class DenunciarAnuncio extends Model
{
    use HasFactory;

    protected $table = 'denuncia_anuncios';

    // Relacionamento com o modelo Anuncio
    public function anuncio()
    {
        return $this->belongsTo(Anuncio::class, 'anuncio_id', 'id');
    }

    // Relacionamento com o modelo User (Denunciante)
    public function denunciante()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
