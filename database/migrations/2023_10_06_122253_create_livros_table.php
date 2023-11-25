<?php

use App\Models\Autor;
use App\Models\Secao;
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
        Schema::create('livros', function (Blueprint $table) {
            $table->string('isbn_livros')->primary()->unique();
            $table->string('titulo_livros');
            $table->string('foto_livros');
            $table->string('sinopse_livros');
            $table->foreignIdFor(Secao::class, "id_secao");
            $table->foreignIdFor(Autor::class, "id");

           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('livros');
    }
};
