<?php

use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Client::create(['client_type' => rand(1,2), 'chief_fio' => 'Иванов Иван Иванович', 'company_title' => 'Компания Иванова', 'code' => rand(1000000, 9999999), 'bank_id' => rand(1,5)]);
        Client::create(['client_type' => rand(1,2), 'chief_fio' => 'Петров Петр Петрович', 'company_title' => 'Компания Петрова', 'code' => rand(1000000, 9999999), 'bank_id' => rand(1,5)]);
        Client::create(['client_type' => rand(1,2), 'chief_fio' => 'Сидоров Сидор Сидорович', 'company_title' => 'Компания Сидорова', 'code' => rand(1000000, 9999999), 'bank_id' => rand(1,5)]);
        Client::create(['client_type' => rand(1,2), 'chief_fio' => 'Алексеев Алексей Алексеевич', 'company_title' => 'Компания Алексеева', 'code' => rand(1000000, 9999999), 'bank_id' => rand(1,5)]);
        Client::create(['client_type' => rand(1,2), 'chief_fio' => 'Васин Василий Васильевич', 'company_title' => 'Компания Васильева', 'code' => rand(1000000, 9999999), 'bank_id' => rand(1,5)]);
        Client::create(['client_type' => rand(1,2), 'chief_fio' => 'Евгеньев Евгений Евгениевич', 'company_title' => 'Компания Евгеньева', 'code' => rand(1000000, 9999999), 'bank_id' => rand(1,5)]);
        Client::create(['client_type' => rand(1,2), 'chief_fio' => 'Володин Владимир Владимирович', 'company_title' => 'Компания Владимира', 'code' => rand(1000000, 9999999), 'bank_id' => rand(1,5)]);
    }
}
