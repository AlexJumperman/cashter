<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientsType extends Model
{
    public $timestamps = false;
    protected $fillable = ['type'];

    public function clients()
    {
        return $this->hasMany('App\Model\Client');
    }
}
