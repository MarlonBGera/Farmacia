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
            $table->unsignedBigInteger('contato_id');
            $table->unsignedBigInteger('endereco_id');
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
        Schema::dropIfExists('clientes');
    }
};
