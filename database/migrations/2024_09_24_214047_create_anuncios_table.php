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
            $table->timestamps();


            //$table->decimal('price', 10, 2);
            //$table->string('contact_info');
            //$table->foreign('usuario_id')->references('id');//->on('users')->onDelete('cascade');
            //$table->BigInteger('category_id'); // Relacionamento com a categoria
            //$table->foreign('category_id')->references('id');//->on('categories')->onDelete('cascade');


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
