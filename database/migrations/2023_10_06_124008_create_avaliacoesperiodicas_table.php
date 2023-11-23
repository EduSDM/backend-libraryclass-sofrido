<?php

use App\Models\Livro;
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
        Schema::create('avaliacoesperiodicas', function (Blueprint $table) {
            $table->id('id_avaliacoesPeriodicas');
            $table->string('descricao');
            $table->timestamps();
            $table->foreignIdFor(Livro::class, "isbn_livros"); 
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('avaliacoesperiodicas');
    }
};
