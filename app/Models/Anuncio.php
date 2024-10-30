<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use OwenIt\Auditing\Contracts\Auditable;

class Anuncio extends Model implements Auditable
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;

    protected $table ="anuncios";

    public function autor(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'user_id');

    }

    public function categoria(): HasOne
    {
        return $this->hasOne(Categoria::class, 'id', 'categoria_id');

    }

    public function comentarios(): HasMany
    {
        return $this->hasMany(Comentarios::class, 'id', 'anuncio_id');
    }
}
