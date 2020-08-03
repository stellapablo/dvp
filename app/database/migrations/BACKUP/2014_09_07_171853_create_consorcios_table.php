<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConsorciosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('consorcios', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('numero');
			$table->string('nombre');
			$table->string('presidente');
			$table->string('secretario');
			$table->string('secretarioadjunto');
			$table->string('tesorero');
			$table->integer('zona');
			$table->integer('departamento');
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
		Schema::drop('consorcios');
	}

}
