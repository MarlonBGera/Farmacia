<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionario_enderecos', function (Blueprint $table) {
            $table->id();
            $table->string('logradouro')->nullable();
            $table->string('n_casa')->nullable();
            $table->string('bairro')->nullable();
            $table->string('cidade')->nullable();
            $table->string('uf')->nullable();
            $table->string('complemento')->nullable();
            $table->string('cep')->nullable();
            $table->unsignedBigInterger('funcionario_id');
            $table->timestamps();

            //Criando a relação entre endereço e funcionario
            $table->foreign('funcionario_id')
                  ->references('id')
                  ->on('funcionarios')
                  ->onDelete('cascade');
            $table->unique('funcionario_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('funcionario_enderecos');
    }
};
