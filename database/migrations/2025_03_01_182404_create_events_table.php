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
        Schema::create('events', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->enum('tipo', ['Social', 'Cultural', 'Esportivo', 'Corporativo', 'Religioso', 'Entreterimento', 'Outros'])->nullable(false); // Valores fixos
            $table->string('titulo', 100);
            $table->string('descricao', 400);
            $table->date('data');
            $table->decimal('valor', 6, 2);
            $table->string('google_maps_link');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
