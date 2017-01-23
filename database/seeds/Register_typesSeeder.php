<?php

use Illuminate\Database\Seeder;
use App\Models\Register_type;

class Register_typesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cash_types = ['Mini', 'Era', 'Saturn', 'Mulinex', 'Vitec'];

        foreach($cash_types as $type){
            Register_type::create(['title' => $type]);
        }
    }
}
