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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 80)->nullable(false);
            $table->string('email', 50)->nullable(false);
            $table->string('celular')->nullable(false);
            $table->string('estado_civil', 50)->nullable(false);
            $table->date('data_nascimento')->nullable(false);
            $table->string('cidade', 70)->nullable(false);
            $table->string('estado', 70)->nullable(false);
            $table->string('endereco', 90)->nullable(false);
            $table->integer('cep')->nullable(false);
            $table->string('password', 20)->nullable(false);
            $table->timestamps();
        });
    }

    /**
     *  
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
