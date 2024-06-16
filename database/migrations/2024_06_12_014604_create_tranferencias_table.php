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
        Schema::create('tranferencias', function (Blueprint $table) {
            $table->id();
            $table->string('referencia');
            $table->string('numero_telefono');
            $table->date('fecha');
            $table->string('banco')->nullable();
            $table->string('monto');
            $table->string('email');
            $table->string('Comentario')->default(null);
            
            $table->foreignId('id_epresas_de_envio_y_retiro')
                ->nullable()
                ->constrained('epresas_de_envio_y_retiros')
                ->cascadeOnDelete()
                ->nullOnDelete();

            $table->foreignId('id_sucursal')
            ->nullable()
            ->constrained('sucursals')
            ->cascadeOnDelete()
            ->nullOnDelete();


            $table->foreignId('id_pago')
            ->nullable()
            ->constrained('tipo_de_pagos')
            ->cascadeOnDelete()
            ->nullOnDelete();

            $table->foreignId('id_estado')
            ->nullable()
            ->constrained('estados')
            ->cascadeOnDelete()
            ->nullOnDelete();
            
            $table->foreignId('id_user')
            ->nullable()
            ->constrained('users')
            ->cascadeOnDelete()
            ->nullOnDelete();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tranferencias');
    }
};
