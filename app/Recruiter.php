<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recruiter extends Model
{
    protected $primaryKey = 'user_id';
    
    public function ads()
    {
    	return $this->belongsToMany('App\Ad', 'recruiter_ads', 'recruiter_id', 'ad_id');
    }
}
