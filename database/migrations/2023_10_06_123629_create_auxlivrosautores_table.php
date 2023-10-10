<?php

use App\Models\Autor;
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
        Schema::create('auxlivrosautores', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignIdFor(Autor::class, "id_autores");
            $table->foreignIdFor(Livro::class, "isbn_livros");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('auxlivrosautores');
    }
};
