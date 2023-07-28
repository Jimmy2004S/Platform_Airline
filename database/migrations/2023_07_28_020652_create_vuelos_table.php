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
        Schema::create('vuelos', function (Blueprint $table) {
            $table->id();
            $table -> string("destino");
            $table -> string("ciudad_partida");
            $table -> string("ciudad_destino");
            $table -> string("fecha");
            $table -> string("hora_salida");
            $table -> string("hora_llegada");
            $table -> int("vuelos_totales");
            $table -> int("vuelos_disponibles");
            $table -> text("imagen");            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vuelos');
    }
};
