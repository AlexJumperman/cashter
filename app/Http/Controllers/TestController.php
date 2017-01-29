<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Cash_register;
use App\Models\Contract;

class TestController extends Controller
{
    public function index(){
//        $contract = Contract::find(3);
//        $register = Cash_register::first();
        $client = Client::find(2);
        return $client->client_type;
    }
}
