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
        Schema::table('proyectos', function (Blueprint $table) {
            $table->string('sinopsis_reto', 300)
                  ->nullable()
                  ->after('problema');

            $table->string('sinopsis_resultado', 300)
                  ->nullable()
                  ->after('resultado');

            $table->boolean('destacado')
                  ->default(false)
                  ->after('publicado');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('proyectos', function (Blueprint $table) {
            $table->dropColumn([
                'sinopsis_reto',
                'sinopsis_resultado',
                'destacado',
            ]);
        });
    }
};
