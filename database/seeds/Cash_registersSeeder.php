<?php

use Illuminate\Database\Seeder;

use App\Models\Cash_register;
use App\Models\Register_type;
use App\Models\Tariff;
use App\Models\Contract;

class Cash_registersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<50; $i++){
            Cash_register::create([
                'contract_id' => Contract::all()->random()->id,
                'title_id' => Register_type::all()->random()->id,
                'create_number' => rand(10000000,99999999),
                'fiscal_number' => rand(10000000,99999999),
                'date_creation' => '2015-01-01',
                'date_registration' => '2017-01-01',
                'tariff_id' => Tariff::all()->random()->id
            ]);
        }
    }
}
