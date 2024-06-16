<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\TipoRetiro;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tipo_retiros', function (Blueprint $table) {
            $table->id();
            $table->string('retiro');
            
            $table->timestamps();
        });

        TipoRetiro::create(['retiro' => "retiro en tienda"]);
        TipoRetiro::create(['retiro' => "Envio gratuito"]);
        TipoRetiro::create(['retiro' => "Envio nacional"]);
        TipoRetiro::create(['retiro' => "Envio cobro a destinatario"]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipo_retiros');
    }
};
