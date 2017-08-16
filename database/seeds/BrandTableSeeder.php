<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Brand;

class BrandTableSeeder extends Seeder
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
               'nombre' => 'Moleskine',
               'imagen' => 'moleskine.jpg',
            ]
        );
        Brand::insert($data);
    }
}