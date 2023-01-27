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
        Schema::create('icms', function (Blueprint $table) {
            $table->id();
            $table->integer('cfopICMS')->nullable();
            $table->string('nameICMS')->nullable();
            $table->string('financeiroICMS')->nullable();
            $table->string('estoqueICMS')->nullable();
            $table->integer('codPlano')->nullable();
            $table->string('baseICMS')->nullable();
            $table->string('stICMS')->nullable();
            $table->boolean('ipiICMS')->nullable();
            $table->boolean('refICMS')->nullable();
            $table->integer('finalICMS')->nullable();
            $table->string('obsICMS')->nullable();
            $table->boolean('leiICMS')->nullable();
            $table->boolean('permICMS')->nullable();
            $table->integer('comissaoICMS')->nullable();
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
        Schema::dropIfExists('icms');
    }
};
