<?php

use Illuminate\Database\Seeder;

use App\ClientsType;

class ClientTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ClientsType::create(['type' => 'Физическое лицо']);
        ClientsType::create(['type' => 'Юридическое лицо']);
    }
}
