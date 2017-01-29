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



Route::group(['middleware' => 'admin'], function()
{
    // Backpack\CRUD: Define the resources for the entities you want to CRUD.
    CRUD::resource('client', 'Admin\ClientCrudController');
    Route::get('client_type/{type_id}', 'Admin\ClientCrudController@index_by_client_type');

    CRUD::resource('bank', 'Admin\BankCrudController');

    CRUD::resource('contract', 'Admin\ContractCrudController');
    Route::get('contract/create/{client_id}', 'Admin\ContractCrudController@create_with_client_default');

    CRUD::resource('tariff', 'Admin\TariffCrudController');

    CRUD::resource('cash_register', 'Admin\Cash_registerCrudController');
    Route::get('cash_register/create/{contract_id}', 'Admin\Cash_registerCrudController@create_with_contract_default');

    CRUD::resource('register_type', 'Admin\Register_typeCrudController');

    Route::get('test', 'TestController@index');
});