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
            $table->string('titulo');
            $table->text('conteudo');
            $table->BigInteger('user_id'); // Relacionamento com o usuário


            //$table->decimal('price', 10, 2);
            //$table->string('contact_info');
            //$table->string('image')->nullable(); // Para armazenar o caminho da imagem
            //$table->foreign('usuario_id')->references('id');//->on('users')->onDelete('cascade');
            //$table->BigInteger('category_id'); // Relacionamento com a categoria
            //$table->foreign('category_id')->references('id');//->on('categories')->onDelete('cascade');

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
