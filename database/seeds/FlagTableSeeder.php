<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Flag;

class FlagTableSeeder extends Seeder
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
               'nombre' => 'Alemania',
               'imagen' => 'alemania.jpg',
            ]
        );
        Flag::insert($data);
    }
}