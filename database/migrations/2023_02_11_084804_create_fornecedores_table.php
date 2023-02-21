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
        Schema::create('fornecedores', function (Blueprint $table) {
            $table->id();
            $table->string('nomeFantasia');
            $table->string('razaoSocial');
            $table->string('cnpj');
            $table->string('ie');
            $table->string('im');
            $table->unsignedBigInteger('contato_id'); //Criando a coluna para relacionamento com contato
            $table->unsignedBigInteger('endereco_id'); //Criando a coluna para relacionamento com endereco
            $table->timestamps();

            //Relacionamento com Contato
            $table->foreign('contato_id')
                  ->references('id')
                  ->on('contatos')
                  ->onDelete('cascade');
            $table->unique('contato_id');

            //Relacionamento com Endereço
            $table->foreign('endereco_id')
                  ->references('id')
                  ->on('enderecos')
                  ->onDelete('cascade');
            $table->unique('endereco_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fornecedores');
    }
};
