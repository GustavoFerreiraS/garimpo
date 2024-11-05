<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('anuncios', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('categoria_id');
            $table->BigInteger('user_id'); // Relacionamento com o usuário
            $table->longText('imagem')->nullable(); // Para armazenar o caminho da imagem
            $table->string('titulo');
            $table->longText('conteudo');
            $table->boolean('status')->default(true);
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anuncios');
    }
};
