<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username')->unique();
            $table->string('telf_hab')->nullable();
            $table->string('telf_cel')->nullable();
            $table->string('email')->unique()->nullable();
            $table->date('fecha_ingreso');
            $table->date('fecha_egreso')->nullable();
            $table->string('salario');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->unsignedBigInteger('persona_id');
            $table->unsignedBigInteger('rol_id');

            /*Relaciones*/
            $table->foreign('persona_id')->references('id')->on('personas')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            /*Relaciones*/
            $table->foreign('rol_id')->references('id')->on('roles')
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
        Schema::dropIfExists('users');
    }
}
