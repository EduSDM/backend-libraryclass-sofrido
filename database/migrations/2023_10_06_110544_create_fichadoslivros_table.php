<?php

use App\Models\Emprestimo;
use App\Models\Livro;
use App\Models\Multa;
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
        Schema::create('fichadoslivros', function (Blueprint $table) {
            $table->string('id_ficha_livros');
            $table->foreignIdFor(Multa::class,"id_multas");
            $table->foreignIdFor(Livro::class, "isbn_livros");
            $table->foreignIdFor(Emprestimo::class,"id_emprestimos");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fichadoslivros');
    }
};
 