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
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('servicio_id')->constrained()->onDelete('cascade');

            $table->string('cliente_nombre');
            $table->string('slug')->unique();
            $table->text('problema');
            $table->text('solucion');
            $table->text('resultado');
            $table->string('url')->nullable();
            $table->string('imagen_proyecto')->nullable();

            $table->boolean('publicado')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proyectos');
    }
};
