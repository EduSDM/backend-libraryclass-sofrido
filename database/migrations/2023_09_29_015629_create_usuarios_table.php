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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->string('id_usuarios');
            $table->string('nome',200);
            $table->char('tipo',1);
            $table->string('cep',10);
            $table->integer('numero_casa',4);
            $table->string('email',100)->unique();
            $table->string('senha');
            $table->string('telefone',25);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
