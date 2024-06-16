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
        Schema::create('epresas_de_envio_y_retiros', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('sucursal')->nullable();
            $table->string('logo')->default(null);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('epresas_de_envio_y_retiros');
    }
};
