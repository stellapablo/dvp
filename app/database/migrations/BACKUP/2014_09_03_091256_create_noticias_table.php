<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNoticiasTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('noticias', function(Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('img_principal');
            $table->string('epigrafe');
            $table->text('bajada');
            $table->text('desarrollo');
            $table->integer('categoria_id')->unsigned()->index();
            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('restrict');
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
        Schema::drop('noticias');
    }

}
