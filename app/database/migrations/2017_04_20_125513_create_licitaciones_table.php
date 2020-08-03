<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLicitacionesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('licitaciones_nacionales', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nro_licitacion');
            $table->string('ruta');
            $table->integer('estado_licitacion_id')->unsigned()->index();
            $table->string('expediente');
            $table->string('evaluacion');
            $table->string('presupuesto_oficial');
            $table->string('mes_referencia')->nullable();
            $table->string('garantia')->nullable();
            $table->string('plazo')->nullable();
            $table->string('fecha_apertura');
            $table->string('lugar_apertura');
            $table->string('fecha_retiro_pliegos')->nullable();
            $table->string('lugar_retiro_pliegos')->nullable();
            $table->string('aviso')->nullable();
            $table->string('pliego_gral')->nullable();
            $table->string('pliego_tecnico')->nullable();
            $table->string('pliego_obra')->nullable();
            $table->string('adendas')->nullable();
            $table->string('aviso_prorroga')->nullable();
            $table->string('form_consultas')->nullable();
            $table->string('form_presupuesto_obra')->nullable();
            $table->string('slug')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('licitaciones');
	}

}
