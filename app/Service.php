<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';
    protected $fillable = [ 'serviceName', 'price','description','rate','created_at','updated_at' ];


    public function subscription()
    {
     	return $this->hasMany('App\Subscription', 'serviceId');
    }
}

