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
            $table->unsignedBigInteger('id_contato');
            $table->unsignedBigInteger('id_endereco');
            $table->timestamps();

            //Relacionamento com Contato
            $table->foreign('id_contato')
                  ->reference('contatos')
                  ->on('id')
                  ->onDelete('cascade');
            $table->unique('id_contato');

            //Relacionamento com Endereco
            $table->foreign('id_endereco')
                  ->reference('enderecos')
                  ->on('id')
                  ->onDelete('cascade');
            $table->unique('id_endereco');
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
