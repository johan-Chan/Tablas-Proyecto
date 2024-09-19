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
        Schema::create('contratos', function (Blueprint $table) {
            $table->id('id_contrato');
            $table->date('fecha_inicio');
            $table->date('fecha_fin')->nullable();
            $table->string('estado_contrato');
            $table->string('periodo_pago');
            $table->unsignedBigInteger('id_tipo_contrato');
            $table->foreign('id_tipo_contrato')->references('id_tipo_contrato')->on('tipo_contrato')->onDelete('cascade');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_contrato');
    }
};
