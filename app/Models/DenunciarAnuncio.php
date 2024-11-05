<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class DenunciarAnuncio extends Model
{
    use HasFactory;

    protected $table = 'denuncia_anuncios';

    public function anuncio(): HasOne
    {
        return $this->hasOne(Anuncio::class, 'id', 'anuncio_id');

    }

    public function denunciante(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'user_id');

    } 
}
