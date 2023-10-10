<?php

use App\Models\Livro;
use App\Models\Usuario;
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
        Schema::create('resenhas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignIdFor(Usuario::class, "id_usuarios");
            $table->foreignIdFor(Livro::class,"isbn_livros");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resenhas');
    }
};
