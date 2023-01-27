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
        Schema::create('grupos', function (Blueprint $table) {
            $table->id();
            $table->integer('codGrupo')->nullable();
            $table->string('nomeGrupo')->nullable();
            $table->string('descGrupo')->nullable();
            $table->decimal('comissaoGrupo', $precision = 4, $scale = 2)->nullable();
            $table->integer('descMaxGrupo')->nullable();
            $table->boolean('active');
            $table->string("userCad");
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
        Schema::dropIfExists('grupos');
    }
};
