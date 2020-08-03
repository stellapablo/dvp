<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		//$this->call('CategoriaTableSeeder');
                $this->call('EstadosTableSeeder');
		$this->call('MensajesTableSeeder');
		$this->call('HistoriaTableSeeder');
		$this->call('DeptoxmapasTableSeeder');
		$this->call('ConsorcioxmapasTableSeeder');
	}

}
