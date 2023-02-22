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
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->integer('ean');
            $table->string('descricao');
            $table->string('modelo')->nullable();
            $table->integer('tipo_produto');
            $table->string('un_medida');
            $table->float('custo', 5, 2);
            $table->float('margem', 3, 2);
            $table->float('preco', 5, 2);

            $table->boolean('actived');
            //Criando a coluna para relacionamento
            $table->unsignedBigInteger('grupo_id');
            $table->unsignedBigInteger('localizacao_id');
            $table->unsignedBigInteger('estoque_id');
            $table->unsignedBigInteger('fabricante_id');
            $table->unsignedBigInteger('tributacao_id')->unique();
            $table->timestamps();

            //Criando o relacionamento
            $table->foreign('grupo_id')->references('id')->on('grupos')->onDelete('cascade');
            $table->foreign('localizacao_id')->references('id')->on('localizacoes')->onDelete('cascade');
            $table->foreign('estoque_id')->references('id')->on('estoques')->onDelete('cascade');
            $table->foreign('fabricante_id')->references('id')->on('fabricantes')->onDelete('cascade');
            $table->foreign('tributacao_id')->references('id')->on('tributacoes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
};
