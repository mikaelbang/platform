<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{

	protected $guarded = [];

	/**
	 * Boot the model.
	 */
	protected static function boot()
	{
	    parent::boot();
	    // static::deleting(function ($thread) {
	    //     $thread->replies->each->delete();
	    // });
	    static::created(function ($ad) {
	        $ad->update(['slug' => $ad->id.'-'.str_slug($ad->title)]);
	    });
	}

	/**
	 * An Ad can have many Tags.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
	 */
    public function tag()
    {
    	return $this->belongsToMany('App\Tag', 'ad_tags', 'ad_id', 'tag_id');
    }

    /**
     * An Ad can have many Benefits.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function benefit()
    {
    	return $this->belongsToMany('App\Tag', 'ad_benefits', 'ad_id', 'benefit_id');
    }

   	public function getAd($slug)
   	{
   		return $this->find(explode('-', $slug)[0]);
   	}

    /**
     * Get the route key name.
     *
     * @return string
     */
    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }
}
