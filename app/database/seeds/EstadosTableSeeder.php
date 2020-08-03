<?php

// Composer: "fzaninotto/faker": "v1.3.0"
//use Faker\Factory as Faker;

class EstadosTableSeeder extends Seeder {

    public function run() {
        Estado::create(['nombre' => 'Publicado']);
        Estado::create(['nombre' => 'No publicado']);
        Estado::create(['nombre' => 'Pendiente']);
    }

}
