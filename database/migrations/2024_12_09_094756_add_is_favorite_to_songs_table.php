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
    Schema::table('song', function (Blueprint $table) {
        $table->boolean('is_favorite')->default(false)->after('rating'); // Añade el campo después de "rating"
    });
}

public function down(): void
{
    Schema::table('song', function (Blueprint $table) {
        $table->dropColumn('is_favorite'); // Elimina el campo al revertir la migración
    });
}

};
