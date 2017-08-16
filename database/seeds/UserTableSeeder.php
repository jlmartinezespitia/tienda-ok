<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
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
        		'name' 		=> 'Jimmy',
        		'last_name' 	=> 'Connors',
        		'email'		=> 'jimmy@connors.com',
        		'user'		=> 'jconnors',
        		'password'	=> \Hash::make('1234'),
        		'type'		=> 'admin',
        		'active'	=> 1,
        		'address'	=> 'Wimbledon 1980',
        		'created_at'=> new DateTime,
        		'updated_at'=> new DateTime
        	],
        	[
        		'name' 		=> 'James',
        		'last_name' 	=> 'Bond',
        		'email'		=> 'james@bond.com',
        		'user'		=> 'jbond',
        		'password'	=> \Hash::make('1234'),
        		'type'		=> 'user',
        		'active'	=> 1,
        		'address'	=> 'London',
        		'created_at'=> new DateTime,
        		'updated_at'=> new DateTime
        	]

    	);
    	User::insert($data);
    }
}
