<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
//
//Auth::routes();
//
//Route::get('/home', 'HomeController@index');

Route::get('test/{id}', 'TestController@index');



Route::group(['middleware' => 'admin', 'namespace' => 'Admin'], function()
{
    // Backpack\CRUD: Define the resources for the entities you want to CRUD.
    CRUD::resource('client', 'ClientCrudController');
    Route::get('client_type/{type_id}', 'ClientCrudController@index_by_client_type');

    CRUD::resource('bank', 'BankCrudController');

    CRUD::resource('contract', 'ContractCrudController');
    Route::get('contract/create/{client_id}', 'ContractCrudController@create_with_client_default');

    CRUD::resource('tariff', 'TariffCrudController');

    CRUD::resource('cash_register', 'Cash_registerCrudController');
    Route::get('cash_register/create/{contract_id}', 'Cash_registerCrudController@create_with_contract_default');

    CRUD::resource('register_type', 'Register_typeCrudController');

    Route::post('pay', 'PayController@store');
});