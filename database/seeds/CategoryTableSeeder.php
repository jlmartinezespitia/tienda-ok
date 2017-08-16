<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            [
               'nombre' => 'Agendas',
               'slug' => 'agendas',
               'descripcion' => 'lorem5 '
            ],
            [
               'nombre' => 'Calculadoras',
               'slug' => 'calculadoras',
               'descripcion' => 'lorem5 '
            ],
            [
               'nombre' => 'Encendedores',
               'slug' => 'encendedores',
               'descripcion' => 'lorem5 '
            ],
            [
               'nombre' => 'Destapadores',
               'slug' => 'destapadores',
               'descripcion' => 'lorem5 '
            ]
        );
        Category::insert($data);
    }
}