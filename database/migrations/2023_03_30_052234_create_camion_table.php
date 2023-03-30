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
        Schema::create('camion', function (Blueprint $table) {
            $table ->integer('id_placa')->primary();
            $table ->string('placa_camion', 6)->unique();
            $table ->string('marca', 105)->nullable();
            $table ->string('color', 50)->nullable();
            $table ->date('modelo', 4)->nullable();
            $table ->integer('capacidad_toneladas', 175);

            $table ->foreignId('codigo_transporte')->references('id')->on('transporte');

            $table ->dateTime('created', 6);
            $table ->dateTime('updated', 6);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('camion');
    }
};
