<?php

use Illuminate\Database\Seeder;
use App\Pay_type;

class PayTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pay_type::create(['type' => 'Наличный расчет']);
        Pay_type::create(['type' => 'Безналичный расчет']);
    }
}
