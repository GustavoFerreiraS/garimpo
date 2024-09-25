<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Database\Eloquent\Relations\HasOne;

class Anuncio extends Model
{
    use HasFactory;

    protected $table ="anuncios";

    public function autor(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'user_id');

    }

    public function categoria(): HasOne
    {
        return $this->hasOne(Categoria::class, 'id', 'categoria_id');

    }
}
