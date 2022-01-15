<?php

use Illuminate\Database\Seeder;
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
        	'name'=>'Admin',
        	'email'=>'admin@gmail.com',
        	'is_admin'=>'1',
        	'password'=> bcrypt('123456'),
        ]);

        User::create([
        	'name'=>'User',
        	'email'=>'user@gmail.com',
        	'is_admin'=>'0',
        	'password'=> bcrypt('123456'),
        ]);
    }
}
