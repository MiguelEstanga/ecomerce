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
        Schema::create('historia_compras', function (Blueprint $table) {
            $table->id();

            $table->string('cantidad');

            $table->foreignId('id_tipo_de_pago')
            ->nullable()
            ->constrained('tipo_de_pagos')
            ->cascadeOnUpdate()
            ->nullOnDelete();

            $table->foreignId('id_user')
            ->nullable()
            ->constrained('users')
            ->cascadeOnUpdate()
            ->nullOnDelete();

            $table->foreignId('id_producto')
            ->nullable()
            ->constrained('productos')
            ->cascadeOnUpdate()
            ->nullOnDelete();

            $table->foreignId('id_tranferencia')
            ->nullable()
            ->constrained('tranferencias')
            ->cascadeOnUpdate()
            ->nullOnDelete();

            $table->foreignId('id_paypal')
            ->nullable()
            ->constrained('paypals')
            ->cascadeOnUpdate()
            ->nullOnDelete();

            $table->foreignId('id_mercantil')
            ->nullable()
            ->constrained('mercantils')
            ->cascadeOnUpdate()
            ->nullOnDelete();

            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historia_compras');
    }
};
