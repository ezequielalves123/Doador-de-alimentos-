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
        Schema::table('candidatos', function (Blueprint $table) {
            $table->string('nome'); // Mantenha a coluna 'nome'
            $table->string('email'); // Adicionada coluna 'email'
            $table->text('mensagem'); // Adicionada coluna 'mensagem' com tipo 'text'
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};