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
            $table->unsignedBigInteger('edocivil_id');
            $table->unsignedBigInteger('discapacidad_id');
            $table->unsignedBigInteger('gradoeduc_id');
            $table->unsignedBigInteger('condlab_id');
            $table->unsignedBigInteger('sector_id');
            $table->unsignedBigInteger('parroquia_id');
            $table->mediumText('direccion');
            $table->timestamps();

            /*Relaciones*/
            $table->foreign('edocivil_id')->references('id')->on('edo_civils')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('discapacidad_id')->references('id')->on('discapacidades')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('gradoeduc_id')->references('id')->on('grados_educativos')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            
            $table->foreign('condlab_id')->references('id')->on('condiciones_laborales')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('sector_id')->references('id')->on('sectores')
            ->onDelete('cascade')
            ->onUpdate('cascade');
                        
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
