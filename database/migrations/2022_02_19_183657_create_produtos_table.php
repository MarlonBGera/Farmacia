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
            $table->integer('codProd')->nullable();
            /** ID DE UM GRUPO QUE POSSUI OUTRA TABELA */
            $table->integer('idGroup')->nullable();
            $table->biginteger('eanProd')->nullable();
            $table->string('nameProd')->nullable();
            /** INFORMAÇÕES DO PRODUTO */
            $table->integer('estoqMinProd')->nullable();
            $table->integer('estoqAtProd')->nullable();
            $table->string('medProd')->nullable();
            /** Fabricante do produto, tem tabela propria */
            $table->string('marcaProd')->nullable();
            $table->string('refProd')->nullable();
            /** Localização do produto, tem tabela propria */
            $table->string('locProd')->nullable();
            $table->boolean('typeProd');
            /** PRECIFICAÇÃO DO PRODUTO */
            $table->decimal('custoProd', $precision = 8, $scale = 4)->nullable();
            $table->decimal('icmsProd', $precision = 8, $scale = 6)->nullable();
            $table->decimal('custOpProd', $precision = 8, $scale = 6)->nullable();
            $table->decimal('impProd', $precision = 8, $scale = 6)->nullable();
            $table->decimal('ipiProd', $precision = 8, $scale = 6)->nullable();
            $table->decimal('custoTotalProd', $precision = 8, $scale = 4)->nullable();
            $table->decimal('margLucroProd', $precision = 8, $scale = 5)->nullable();
            $table->decimal('precVendaProd', $precision = 8, $scale = 2)->nullable();
            $table->integer('aliqIbptProd')->nullable();
            /** AÇÕES DO PRODUTO */
            $table->boolean('block');
            $table->boolean('active');
            $table->string('userCad');
            $table->timestamps();
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
