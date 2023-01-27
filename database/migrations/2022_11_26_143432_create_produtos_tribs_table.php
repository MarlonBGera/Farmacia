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
        Schema::create('produtos_tribs', function (Blueprint $table) {
            $table->id();
            $table->integer('cfopProd')->nullable();
            $table->integer('tribProd')->nullable();
            $table->integer('csosnProd')->nullable();
            $table->integer('ctecfProd')->nullable();
            $table->integer('ncmProd')->nullable();
            $table->string('cestProd')->nullable();
            $table->timestamps();

            /** Criando chave estragenria para ligar a tributação ao produto. */
            $table->foreign('produto')->references('id')->on('produtos')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos_tribs');
    }
};
