<?php

use Illuminate\Database\Seeder;
use App\Models\Cash_register;
use App\Models\Register_type;

class Cash_registersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cash_types = Register_type::all()->toArray();
        for($i=0; $i<50; $i++){
            Cash_register::create([
                'contract_id' => rand(1,20),
                'title_id' => $cash_types[rand(0,count($cash_types)-1)]['id'],
                'create_number' => rand(10000000,99999999),
                'fiscal_number' => rand(10000000,99999999),
                'date_creation' => '2015-01-01',
                'date_registration' => '2017-01-01', 'tariff_id' => rand(1,5)
            ]);
        }
    }
}
