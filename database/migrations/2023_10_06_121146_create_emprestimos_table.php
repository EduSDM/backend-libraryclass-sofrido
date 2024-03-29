<?php

use App\Models\Livro;
use App\Models\User;
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
        Schema::create('emprestimos', function (Blueprint $table) {
            $table->id("id_emprestimos");
            $table->date("data_emprestimos");
            $table->foreignIdFor(User::class,"id_usuarios");
            $table->foreignIdFor(Livro::class,"isbn_livros");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emprestimos');
    }
};
