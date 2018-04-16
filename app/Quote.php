<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    protected $table = 'quote';
    protected $fillable = [ 'services', 'comments','depth','subscribed','total','companyId','created_at','updated_at' ];


}
