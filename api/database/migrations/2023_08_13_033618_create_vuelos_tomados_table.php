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
        Schema::create('vuelos_tomados', function (Blueprint $table) {
            $table->id();
            $table -> unsignedBigInteger("vuelo_id");
            $table -> foreign("vuelo_id")
                -> references("id")
                -> on("vuelos")
                ->onDelete("cascade");
            $table -> unsignedBigInteger("user_id");
            $table -> foreign("user_id")
                    -> references("id")
                    -> on("users")
                    ->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vuelos_tomados');
    }
};
