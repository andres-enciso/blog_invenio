<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('entradas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('autor');
            $table->date('fecha_publicacion');
            $table->text('contenido');
            $table->timestamps(); // Añade created_at y updated_at automáticamente
        });
    }

    public function down()
    {
        Schema::dropIfExists('entradas');
    }
};
