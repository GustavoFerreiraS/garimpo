<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curtida extends Model
{
    use HasFactory;

    protected $table ='curtidas';

    public function anuncio()
{
    return $this->belongsTo(Anuncio::class, 'anuncio_id');
}

}
