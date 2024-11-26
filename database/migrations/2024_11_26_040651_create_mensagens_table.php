<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mensagem extends Model
{
    use HasFactory;

    protected $table = 'mensagens';

    // Relação com o Anúncio
    public function anuncio()
    {
        return $this->belongsTo(Anuncio::class);
    }

    // Relação com o autor (usuário)
    public function deUser()
    {
        return $this->belongsTo(User::class, 'de_user_id');
    }
}
