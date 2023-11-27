<?php

use App\Models\Mural;

use App\Models\User;
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
        Schema::create('publicacoes', function (Blueprint $table) {
            $table->string('id_publicacao');
            $table->string('titulo',255);
            $table->string('conteudo',255);
            $table->string('imagem_publicacao');
            $table->foreignIdFor(User::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publicacoes');
    }
};
