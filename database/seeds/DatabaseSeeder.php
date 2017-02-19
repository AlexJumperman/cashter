<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersSeeder::class);
        $this->call(BanksSeeder::class);
        $this->call(ClientTypesSeeder::class);
        $this->call(Register_typesSeeder::class);
        $this->call(TariffsSeeder::class);
        $this->call(PayTypesSeeder::class);
        $this->call(ClientsSeeder::class);
        $this->call(ContractsSeeder::class);
        $this->call(Cash_registersSeeder::class);
//        $this->call(PaysSeeder::class);
    }
}
