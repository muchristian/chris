<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Output extends Model
{
    //
    protected $fillable = [
        'user_id',
        'input_id',
        'site_id',
    ];

    public function users(){
        return $this->belongsTo('App\User');
    }
    public function inputs(){
        return $this->belongsTo('App\Input', 'input_id');
    }
    public function sites(){
        return $this->belongsTo('App\Site');
    }
}
