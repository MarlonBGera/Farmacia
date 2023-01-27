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
        Schema::create('fornecedors', function (Blueprint $table) {
            $table->id();
            $table->integer('codForn')->nullable();
            $table->string('razaoForn')->nullable();
            $table->string('nomeFantForn')->nullable();
            $table->string('contactForn')->nullable();
            $table->integer('phoneForn')->nullable();
            $table->integer('cepForn')->nullable();
            $table->string('endForn')->nullable();
            $table->string('compForn')->nullable();
            $table->integer('numbForn')->nullable();
            $table->string('bairroForn')->nullable();
            $table->string('ufForn')->nullable();
            $table->string('cityForn')->nullable();
            $table->string('emailForn')->nullable();
            $table->integer('cnpjForn')->nullable();
            $table->integer('ieForn')->nullable();
            $table->integer('imForn')->nullable();
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
        Schema::dropIfExists('fornecedors');
    }
};
