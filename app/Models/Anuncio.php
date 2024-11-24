<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use OwenIt\Auditing\Contracts\Auditable;
use App\Models\Categoria;


class Anuncio extends Model implements Auditable
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;

    protected $table ="anuncios";

    public function autor()
    {
        return $this->HasOne(User::class, 'id', 'user_id');

    }

    public function categoria()
    {
        return $this->HasOne(Categoria::class, 'id', 'categoria_id');

    }

    public function comentarios(): HasMany
    {
        return $this->hasMany(Comentario::class, 'anuncio_id', 'id');
    }

    public function curtidas(): HasMany
    {
        return $this->hasMany(Curtida::class, 'anuncio_id', 'id');
    }
}
