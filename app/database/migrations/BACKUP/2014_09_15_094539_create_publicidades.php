<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePublicidades extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('publicidades', function(Blueprint $table) {
            $table->string('descripcion');
            $table->string('imagen');
            $table->integer('estado_id')->unsigned()->index();
            $table->foreign('estado_id')->references('id')->on('estados')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('publicidades');
    }

}
