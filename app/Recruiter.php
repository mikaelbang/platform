<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Baum\Node as BNode;

class Recruiter extends BNode
{
    public $incrementing = false;

    protected $primaryKey = 'user_id';

    protected $with = ['user'];
    
    public function ads()
    {
    	return $this->belongsToMany('App\Ad', 'recruiter_ads', 'recruiter_id', 'ad_id');
    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function network()
    {
    	return $this->where('lft', '>', $this->lft)
    				->where('rgt', '<', $this->rgt)
                    ->orderBy('lft')
    				->get();
    }
}
