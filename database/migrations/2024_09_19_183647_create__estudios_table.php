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
        Schema::create('estudios', function (Blueprint $table) {
            $table->id('id_estudio'); 
            $table->string('institucion');
            $table->date('año_inicio');
            $table->date('año_fin')->nullable();
            $table->string('titulo');
            $table->string('nivel_estudio');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_estudios');
    }
};
