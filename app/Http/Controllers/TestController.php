<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Cash_register;
use App\Models\Contract;

class TestController extends Controller
{
    public function index(Client $id){
//        $contract = Contract::find(3);
//        $register = Cash_register::first();
//        $client = Client::find(2);

//        return response()->json($id->pays->pluck('pay_month')->search('2017-01-01'));
        return $id->monthCountToCurrentDate;
    }
}
