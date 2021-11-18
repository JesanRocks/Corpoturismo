<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitudesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cod');
            $table->unsignedBigInteger('usuario_id');
            $table->unsignedBigInteger('documento_id');
            $table->unsignedBigInteger('estatus_id');
            $table->string('periodo');
            $table->date('fecha_inicio')->nullable();
            $table->date('fecha_aprobado')->nullable();
            $table->mediumText('razon');
            $table->timestamps();

            $table->foreign('usuario_id')->references('id')->on('users')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('documento_id')->references('id')->on('documentos')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('estatus_id')->references('id')->on('estatus')
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
        Schema::dropIfExists('solicitudes');
    }
}
