<?php

use Illuminate\Database\Seeder;
use App\Models\Contract;
use App\Models\Client;

class ContractsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<20; $i++){
            Contract::create(['client_id' => Client::all()->random()->id, 'contract_id' => rand(1000, 9999), 'date_start' => '2017-01-01', 'date_end' => '2017-01-30']);
        }
    }
}
