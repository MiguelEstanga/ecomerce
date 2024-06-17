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
        Schema::create('cache_empresa_de_envio_y_retiros', function (Blueprint $table) {
            $table->id();
            
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
        Schema::dropIfExists('cache_empresa_de_envio_y_retiros');
    }
};
