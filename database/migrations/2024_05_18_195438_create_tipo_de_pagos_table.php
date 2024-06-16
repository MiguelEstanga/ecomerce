<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\TipoDePago;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tipo_de_pagos', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_pago');
            $table->timestamps();
        });

        TipoDePago::create(['tipo_pago' => "Traferencia Bancaria"]);
        TipoDePago::create(['tipo_pago' => "Paypal"]);
        TipoDePago::create(['tipo_pago' => "Mercantil"]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipo_de_pagos');
    }
};
