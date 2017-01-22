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
        Bank::create(['title' => 'Приват', 'mfo' => rand(1000000, 9999999), 'account' => rand(1000000, 9999999)]);
        Bank::create(['title' => 'Аваль', 'mfo' => rand(1000000, 9999999), 'account' => rand(1000000, 9999999)]);
        Bank::create(['title' => 'Ощад', 'mfo' => rand(1000000, 9999999), 'account' => rand(1000000, 9999999)]);
        Bank::create(['title' => 'Дельта', 'mfo' => rand(1000000, 9999999), 'account' => rand(1000000, 9999999)]);
        Bank::create(['title' => 'Пумб', 'mfo' => rand(1000000, 9999999), 'account' => rand(1000000, 9999999)]);
    }
}
