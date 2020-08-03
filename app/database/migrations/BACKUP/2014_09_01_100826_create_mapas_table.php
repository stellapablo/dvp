<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMapasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mapas', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nombre');
			$table->string('archivo');
			$table->string('descripcion');
			$table->integer('tipo');
			$table->boolean('zona1');
			$table->boolean('zona2');
			$table->boolean('zona3');
			$table->boolean('zona4');
			$table->boolean('zona5');
			$table->integer('tamanio');
			$table->integer('provinciacompleta');
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
		Schema::drop('mapas');
	}

}
