<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(['name' => 'AlexJumperman', 'email' => 'alex.jumperman@gmail.com', 'password' => 'qwe123']);
        User::create(['name' => 'Admin', 'email' => 'admin@gmail.com', 'password' => 'qwe123']);
    }
}
