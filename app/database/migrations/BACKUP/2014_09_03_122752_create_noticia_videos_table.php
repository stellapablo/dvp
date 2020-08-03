<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNoticiaVideosTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('noticia_videos', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('noticia_id')->unsigned()->index();
            $table->foreign('noticia_id')->references('id')->on('noticias')->onDelete('restrict');
            $table->string('nombre');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('noticia_videos');
    }

}
