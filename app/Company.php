<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function ads()
    {
    	return $this->hasManyThrough('App\Ad', 'App\Department');
    }
}
