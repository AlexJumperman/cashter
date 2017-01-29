<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Cash_register extends Model
{
    use CrudTrait;

     /*
	|--------------------------------------------------------------------------
	| GLOBAL VARIABLES
	|--------------------------------------------------------------------------
	*/

    //protected $table = 'cash_registers';
    //protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
     protected $fillable = ['contract_id', 'title_id', 'create_number', 'fiscal_number', 'date_creation', 'date_registration', 'address', 'tariff_id'];
    // protected $hidden = [];
    // protected $dates = [];
    protected $appends = ['tariff_rate'];

    /*
	|--------------------------------------------------------------------------
	| FUNCTIONS
	|--------------------------------------------------------------------------
	*/

    /*
	|--------------------------------------------------------------------------
	| RELATIONS
	|--------------------------------------------------------------------------
	*/
    public function tariff()
    {
        return $this->belongsTo('App\Models\Tariff');
    }

    public function register_type_relation()
    {
        return $this->belongsTo('App\Models\Register_type', 'title_id');
    }

    public function contract(){
        return $this->belongsTo('App\Models\Contract');
    }


    /*
	|--------------------------------------------------------------------------
	| SCOPES
	|--------------------------------------------------------------------------
	*/

    /*
	|--------------------------------------------------------------------------
	| ACCESORS
	|--------------------------------------------------------------------------
	*/

    public function getTariffRateAttribute(){
        return $this->tariff->rate;
    }

    public function getRegisterTypeAttribute(){
        return $this->register_type_relation->title;
    }

    /*
	|--------------------------------------------------------------------------
	| MUTATORS
	|--------------------------------------------------------------------------
	*/
}
