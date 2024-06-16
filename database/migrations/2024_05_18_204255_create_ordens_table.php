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
        Schema::create('ordens', function (Blueprint $table) {
            $table->id();

            
            $table->string('direccion')->default(0);
            $table->string('descuento')->default(0);
            $table->string('precio_envio')->default(0);

            $table->foreignId('id_tipo_de_pago')
                    ->nullable()
                ->constrained('tipo_de_pagos')
                ->cascadeOnUpdate()
                ->nullOnDelete();

                $table->foreignId('id_epresas_de_envio_y_retiros')
                ->nullable()
                ->constrained('epresas_de_envio_y_retiros')
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

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ordens');
    }
};
