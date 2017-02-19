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
        $tariffs = [100, 150, 200, 250, 300];
        foreach($tariffs as $tariff){
            Tariff::create(['rate' => $tariff]);
        }
    }
}
