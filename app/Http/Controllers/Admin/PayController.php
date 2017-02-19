<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Pay;

class PayController extends Controller
{
    public function store(Request $request){
        $pay = Pay::create($request->only(['pay_month', 'pay_type_id', 'client_id']));
        $pay->cash_registers()->attach($request->input('cash_registers'));
        return redirect()->action('Admin\ClientCrudController@show', ['id' => $request->input('client_id')]);
    }
}
