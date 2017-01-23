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
    CRUD::resource('bank', 'Admin\BankCrudController');
    CRUD::resource('contract', 'Admin\ContractCrudController');
    CRUD::resource('tariff', 'Admin\TariffCrudController');
    CRUD::resource('cash_register', 'Admin\Cash_registerCrudController');
    CRUD::resource('register_type', 'Admin\Register_typeCrudController');
});