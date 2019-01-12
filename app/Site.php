<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    //
    protected $fillable = [
        'name',
        'location'
    ];

     public function inputs()
     {
         return $this->hasMany('App\Input');
     }
}
