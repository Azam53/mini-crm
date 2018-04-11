<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Events\CompanyNotification;

class Company extends Model
{
    protected $table = 'companies';
    protected $fillable = [ 'name', 'address','postalCode','province', 'country', 'contactNumber','email','url' ,'bankNumber','status','created_at','updated_at' ];
    

     public function subscription()
    {
     	return $this->hasMany('App\Subscription', 'companyId');
    }

     protected $dispatchesEvents = [
        'created' => CompanyNotification::class,
    ];
    
}
