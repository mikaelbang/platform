<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
	public $incrementing = false;

	protected $primaryKey = "user_id";
	
    public function department()
    {
    	return $this->belongsToMany('App\Department', 'department_users', 'user_id', 'department_id');
    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
