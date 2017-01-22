<?php

use Illuminate\Database\Seeder;
use App\Models\Tariff;

class TariffsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tariff::create(['rate' => 100]);
        Tariff::create(['rate' => 150]);
        Tariff::create(['rate' => 200]);
        Tariff::create(['rate' => 250]);
        Tariff::create(['rate' => 300]);
    }
}
