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
          Schema::create('jerseys', function (Blueprint $table) {
            $table->id();
            $table->string('nomeJersey');
            $table->string('timeJersey');
            $table->string('temporadaJersey');
            $table->string('tamanhoJersey');
            $table->string('precoJersey');
            $table->string('imagemJersey');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jerseys');
    }
};
