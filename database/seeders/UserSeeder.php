<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Baby',
            'email' => 'test@gmail.com',
            'password' => 'test',
            'tel' => "0706363231"
        ]);
        User::create([
            'name' => 'test',
            'email' => 'test2@gmail.com',
            'password' => 'test',
            'tel' => "0706363233"
        ]);
    }
}