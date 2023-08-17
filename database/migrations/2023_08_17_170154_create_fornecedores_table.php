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
        Schema::create('fornecedores', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 80)->nullable(false);
            $table->string('cpf', 11)->unique()->nullable(false);
            $table->string('email', 100)->unique()->nullable(false);
            $table->string('contato', 15)->nullable(true);
            $table->string('cep', 8)->nullable(false);
            $table->string('inscriçao municipal',11 )->unique()->nullable(false);
            $table->string('país',50 )->nullable(false);
            $table->string('cnpj', 14)->unique()->nullable(false);
            $table->string('bairro', 40)->nullable(false);
            $table->string('codigo', 12)->unique()->nullable(false);
            $table->string('cidade', 60)->nullable(false);
            $table->string('website', 100)->unique()->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fornecedores');
    }
};
