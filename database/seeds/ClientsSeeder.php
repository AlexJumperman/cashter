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
                'client_type' => rand(1,2),
                'chief_fio' => $c,
                'company_title' => 'ФОП '.explode(" ", $c)[0],
                'code' => rand(1000000, 9999999),
                'phone' => rand(1000000, 9999999),
                'email' => $this->generateRandomString(5)."@gmail.com",
                'address_defacto' => $this->generateRandomString(30),
                'address_deuro' => $this->generateRandomString(30),
                'bank_id' => rand(1,5)
            ]);
        }
    }

    private function generateRandomString($length = 5) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
