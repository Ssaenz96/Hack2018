<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	User::create([
            'name'	=> 'Prueba Laravel',
        	'email'	=> 'a@a.com',
        	'password' => '123456'
        ]);
    }
}
