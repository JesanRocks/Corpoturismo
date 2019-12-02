<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombres',30);
            $table->string('apellidos',30);
            $table->integer('cedula')->unique();
            $table->date('nacimiento');
            $table->enum('sexo', ['M', 'F']);
            $table->unsignedBigInteger('parroquia_id');
            $table->mediumText('direccion');
            $table->timestamps();

            /*Relaciones*/
            $table->foreign('parroquia_id')->references('id')->on('parroquias')
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
        Schema::dropIfExists('personas');
    }
}
