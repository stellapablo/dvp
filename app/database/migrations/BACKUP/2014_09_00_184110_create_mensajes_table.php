<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMensajesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mensajes', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('mapa');
			$table->integer('dni');
			$table->string('nombre');
			$table->string('apellido');
			$table->string('email');
			$table->text('mensaje');
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
		Schema::drop('mensajes');
	}

}
