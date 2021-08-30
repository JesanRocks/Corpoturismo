<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGradosEducativosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grados_educativos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('dsc');
            $table->unsignedBigInteger('niveleduc_id');
            $table->timestamps();

            $table->foreign('niveleduc_id')->references('id')->on('niveles_educativos')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grados_educativos');
    }
}
