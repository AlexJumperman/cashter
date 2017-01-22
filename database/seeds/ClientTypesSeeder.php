<?php

use Illuminate\Database\Seeder;

use App\ClientType;

class ClientTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ClientType::create(['type' => 'Физическое лицо']);
        ClientType::create(['type' => 'Юридическое лицо']);
    }
}
