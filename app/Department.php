<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public function employee()
    {
    	return $this->belongsToMany('App\Employee', 'department_users', 'department_id', 'user_id');
    }

    public function ads()
    {
    	return $this->hasMany('App\Ad');
    }

    public function company()
    {
    	return $this->belongsTo('App\Company');
    }
}
