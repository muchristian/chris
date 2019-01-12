<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campany extends Model
{
    //

     public function inputs()
     {
         return $this->hasMany('App\Input');
     }
}
