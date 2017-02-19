<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Client extends Model
{
    use CrudTrait;

     /*
	|--------------------------------------------------------------------------
	| GLOBAL VARIABLES
	|--------------------------------------------------------------------------
	*/

    //protected $table = 'clients';
//    protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
     protected $fillable = ['client_type_id', 'chief_fio', 'company_title', 'code', 'phone', 'email', 'address_defacto',
                            'address_deuro', 'bank_id'];
//     protected $hidden = ['clients_type'];
    // protected $dates = [];
//    protected $appends = ['client_type'];

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
    public function clients_type()
    {
        return $this->belongsTo('App\ClientsType', 'client_type_id');
    }

    public function bank()
    {
        return $this->belongsTo('App\Models\Bank');
    }

    public function contracts(){
        return $this->hasMany('App\Models\Contract');
    }

    public function cash_registers(){
        return $this->hasManyThrough('App\Models\Cash_register', 'App\Models\Contract');
    }

    public function pays(){
        return $this->hasMany('App\Pay');
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

    public function getClientTypeAttribute(){
        return $this->clients_type->type;
    }

    public function getTotalPayAttribute(){
        return $this->contracts->sum('total_pay');
    }

    public function getContractsPeriodAttribute(){
        $start    = new \DateTime('2016-01-01');
        $end      = new \DateTime('2018-01-01');
        $interval = \DateInterval::createFromDateString('1 month');
        $period   = new \DatePeriod($start, $interval, $end);
        return $period;
    }

    /*
	|--------------------------------------------------------------------------
	| MUTATORS
	|--------------------------------------------------------------------------
	*/
}
