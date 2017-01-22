<?php

use Illuminate\Database\Seeder;
use App\Models\Cash_register;

class Cash_registersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cash_types = ['Mini', 'Era', 'Saturn', 'Mulinex', 'Vitec'];

        for($i=0; $i<50; $i++){
            Cash_register::create(['contract_id' => rand(1,20), 'title' => $cash_types[rand(0,4)], 'date_creation' => '2015-01-01', 'date_registration' => '2017-01-01', 'tariff_id' => rand(1,5)]);
        }
    }
}
