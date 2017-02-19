<?php

use Illuminate\Database\Seeder;

use App\Pay;
use App\Pay_type;
use App\Models\Client;
use App\Models\Cash_register;

class PaysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<50; $i++){
            $pay = Pay::create([
                'pay_type_id' => Pay_type::all()->random()->id,
                'client_id' => Client::all()->random()->id,
                'pay_month' => rand(2015, 2017).'-0'.rand(1, 9).'-'.rand(10, 28)
            ]);

            $pay->cash_registers()->attach(Cash_register::all()->random()->id);
        }
    }
}
