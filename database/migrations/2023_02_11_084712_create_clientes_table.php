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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nome'); //Nome Fantasia para PJ
            $table->string('razaoSocial')->nullable(); //Somente para PJ
            $table->string('cadastro', 14)->nullable(); //CPF (PF) ou CNPJ (PJ)
            $table->string('registro', 15)->nullable(); //RG (PF) ou Inscrição Estadual (PJ)
            $table->string('im')->nullable(); //Inscrição Municial caso o PJ tenha
            $table->integer('sexo')->nullable();
            $table->unsignedBigInteger('id_contato');
            $table->unsignedBigInteger('id_endereco');
            $table->timestamps();

            //Relacionamento com Contato
            $table->foreing('id_contato')
                  ->reference('contatos')
                  ->on('id')
                  ->onDelete('cascade');
            $table->unique('id_contato');

            //Relacionamento com Endereço
            $table->foreing('id_endereco')
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
        Schema::dropIfExists('clientes');
    }
};
