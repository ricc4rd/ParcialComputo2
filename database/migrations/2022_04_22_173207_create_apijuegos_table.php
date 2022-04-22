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
        Schema::create('apijuegos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->string('nombre del juego');
            $table->string('categoria');
            $table->string('cantidad');
            $table->int('precio');
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
        Schema::dropIfExists('apijuegos');
    }
};
