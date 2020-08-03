<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDireccionsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('direcciones', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('director');
            $table->string('telefono');
            $table->string('interno');
            $table->string('email');
            $table->string('desarrollo');
            $table->integer('estado_id')->unsigned()->index();
            $table->foreign('estado_id')->references('id')->on('estados')->onDelete('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('direcciones');
    }

}
