<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Itemtype extends Model
{
    //
    protected $table = "itemtypes";
    public function inputs()
     {
         return $this->hasMany('App\Input');
     }
}
