<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'user_settings';
    protected $fillable = [ 'discountRule', 'userId','created_at','updated_at' ];
}
