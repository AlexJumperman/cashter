<?php

use Illuminate\Database\Seeder;

use App\Models\Client;
use App\ClientsType;
use App\Models\Bank;

class ClientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clients_fio = [
            'Иванов Иван Иванович',
            'Петров Петр Петрович',
            'Сидоров Сидор Сидорович',
            'Алексеев Алексей Алексеевич',
            'Васин Василий Васильевич',
            'Евгеньев Евгений Евгениевич',
            'Володин Владимир Владимирович',
        ];

        foreach($clients_fio as $c){
            Client::create([
                'client_type_id' => ClientsType::all()->random()->id,
                'chief_fio' => $c,
                'company_title' => 'ФОП '.explode(" ", $c)[0],
                'code' => rand(1000000, 9999999),
                'phone' => rand(1000000, 9999999),
                'email' => str_random(5)."@gmail.com",
                'address_defacto' => str_random(30),
                'address_deuro' => str_random(30),
                'bank_id' => Bank::all()->random()->id
            ]);
        }
    }
}
