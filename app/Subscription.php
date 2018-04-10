<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
     protected $table = 'subscriptions';
     protected $fillable = [ 'serviceId', 'companyId','recurring','startDate', 'endDate', 'rate','discount','description' ,'status','created_at','updated_at' ];


    //  protected $dispatchesEvents = [
    //     'saved' => Subscribed::class,
    // ];
}
