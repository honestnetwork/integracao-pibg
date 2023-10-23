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
        Schema::create('pessoas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('imagem')->nullable();
            $table->string('telefone')->nullable();
            $table->string('email')->nullable();
            $table->string('pai')->nullable();
            $table->string('mae')->nullable();
            $table->string('logradouro')->nullable();
            $table->unsignedBigInteger('id_tipo');
            $table->foreign('id_tipo')->references('id')->on('tipo_pessoas')->onDelete('cascade');
            $table->unsignedBigInteger('id_status');
            $table->foreign('id_status')->references('id')->on('status_pessoas')->onDelete('cascade');
            $table->unsignedBigInteger('id_bairro');
            $table->foreign('id_bairro')->references('id')->on('bairros')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pessoas');
    }
};
