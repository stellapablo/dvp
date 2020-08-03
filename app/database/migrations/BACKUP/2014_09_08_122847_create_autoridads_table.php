<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAutoridadsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('autoridades', function(Blueprint $table) {

            $table->increments('id');
            $table->string('descripcion');
            $table->string('imagen');
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
        Schema::drop('autoridads');
    }

}
