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
            $table->id();
            $table ->string('placa_camion', 6)->unique();
            $table ->string('marca', 105);
            $table ->string('color', 175);
            $table ->date('modelo', 4);
            $table ->integer('capacidad_toneladas', 175);

            $table ->bigInteger('codigo_transporte')->unsigned();
            $table ->foreign('codigo_transporte')->references('id')->on('transporte');

            $table ->dateTime('created_at', 15);
            $table ->dateTime('updated', 15);
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
