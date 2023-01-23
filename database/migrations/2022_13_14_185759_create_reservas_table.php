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
        Schema::defaultStringLength(100);
        Schema::create('reservas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_cliente')->nullable();
            $table->unsignedBigInteger('id_invitado')->nullable();
            $table->unsignedBigInteger('id_menu')->unique();
            $table->unsignedBigInteger('id_mesa')->unique();
            $table->string('num_tarjeta');
            $table->date('fecha_reserva');
            $table->integer('num_personas');
            $table->timestamps();

            $table->foreign('id_cliente')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_menu')->references('id')->on('menus')->onDelete('cascade');
            $table->foreign('id_invitado')->references('id')->on('invitados')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservas');
    }
};
