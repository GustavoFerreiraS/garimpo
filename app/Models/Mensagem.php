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

    // Relação com o autor (usuário que enviou a mensagem)
    public function deUser()
    {
        return $this->belongsTo(User::class, 'de_user_id');
    }

    // Relação com o destinatário (usuário que recebeu a mensagem)
    public function paraUser()
    {
        return $this->belongsTo(User::class, 'para_user_id');
    }
}
