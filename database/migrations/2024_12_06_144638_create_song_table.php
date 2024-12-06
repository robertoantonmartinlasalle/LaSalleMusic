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
        Schema::create('song', function (Blueprint $table) {
            $table->id(); // Campo ID con auto incremento
            $table->string('title', 255); // Campo título con un máximo de 255 caracteres
            $table->string('group', 255); // Campo grupo/artista con un máximo de 255 caracteres
            $table->string('style', 50); // Campo estilo con un máximo de 50 caracteres
            $table->integer('rating')->check('rating >= 0 AND rating <= 10'); // Campo rating entre 0 y 10
            $table->timestamps(); // Campos created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('song'); // Elimina la tabla song si existe
    }
};
