<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';
    protected $fillable = [ 'name', 'address','postalCode','province', 'country', 'contactNumber','email','url' ,'bankNumber','status','created_at','updated_at' ];
}