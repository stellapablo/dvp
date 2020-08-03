<?php

// Composer: "fzaninotto/faker": "v1.3.0"
//use Faker\Factory as Faker;

class CategoriaTableSeeder extends Seeder {

    public function run() {
        Categorium::create(['descripcion' => 'Obras']);
        Categorium::create(['descripcion' => 'Urbana']);
        Categorium::create(['descripcion' => 'Delegaciones']);
        Categorium::create(['descripcion' => 'Consorcios']);
        Categorium::create(['descripcion' => 'Noticias']);
    }

}
