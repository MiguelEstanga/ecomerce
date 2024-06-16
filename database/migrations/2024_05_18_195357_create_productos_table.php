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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();

            $table->string('nombre');
            $table->string('inmagen_default');
            $table->string('precio');

            $table->string('descripcion');

            $table->string('stop');
            
           
            $table->string("es_descueto")->default(false);
            $table->string('descuento')->default(null);
            $table->string('tiempo_descuento')->default(null);
            $table->string('ventas')->default(null);

          

            $table->foreignId('id_categoria')
            ->nullable()
            ->constrained('categorias')
            ->cascadeOnUpdate()
            ->nullOnDelete();

            $table->foreignId('id_usuario')
            ->nullable()
            ->constrained('users')
            ->cascadeOnUpdate()
            ->nullOnDelete();

            $table->foreignId('id_tipo_retiros')
            ->nullable()
            ->constrained('tipo_retiros')
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
        Schema::dropIfExists('productos');
    }
};
