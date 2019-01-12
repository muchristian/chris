<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Input extends Model
{
    //
    protected $fillable = [
        'name',
        'itemtype_id',
        'campany_id',
        'site_id',
        'user_id',
        'quantity'
        
    ];

    public function itemtypes(){
        return $this->belongsTo('App\Itemtype');
    }
    public function campanies(){
        return $this->belongsTo('App\Campany');
    }
    public function sites(){
        return $this->belongsTo('App\Site');
    }
    public function users(){
        return $this->belongsTo('App\User');
    }
    public function outputs(){
    	return $this->hasOne('App\Output', 'input_id');
    }
}
