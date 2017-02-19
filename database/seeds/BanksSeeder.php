<?php

use Illuminate\Database\Seeder;
use App\Models\Bank;

class BanksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $banks = ['Приват', 'Аваль', 'Ощад', 'Дельта', 'Пумб'];
        foreach($banks as $bank){
            Bank::create(['title' => $bank, 'mfo' => rand(1000000, 9999999), 'account' => rand(1000000, 9999999)]);
        }
    }
}
