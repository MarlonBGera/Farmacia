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
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('cpf');
            $table->string('user');
            $table->string('password', 255);
            $table->integer('sexo');
            $table->unsignedBigInterger('id_contato');
            $table->unsignedBigInterger('id_endereco');
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
        Schema::dropIfExists('funcionarios');
    }
};
