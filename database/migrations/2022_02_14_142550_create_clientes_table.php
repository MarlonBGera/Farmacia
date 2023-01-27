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
            $table->string('nameClient')->nullable();
            $table->integer('cpfClient')->nullable();
            $table->integer('rgClient')->nullable();
            $table->integer('sexClient')->nullable();
            $table->dateTime('nascClient')->nullable();
            $table->integer('cepClient')->nullable();
            $table->string('endressClient')->nullable();
            $table->string('compClient')->nullable();
            $table->integer('numberClient')->nullable();
            $table->string('bairroClient')->nullable();
            $table->string('ufClient', 2)->nullable();
            $table->string('cityClient')->nullable();
            $table->string('contactClient')->nullable();
            $table->string('emailClient')->nullable();
            $table->integer('phoneClient')->nullable();
            $table->integer('cnpjClient')->nullable();
            $table->integer('ieClient')->nullable();
            $table->integer('imClient')->nullable();
            $table->string('nameFantasiaClient')->nullable();
            $table->boolean('typeClient');
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
        Schema::dropIfExists('clientes');
    }
};
