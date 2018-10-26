<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['city', 'year', 'about', 'branch', 'user_id'];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
    public function skills()
    {
    	return $this->belongsToMany('App\Skill');
    }
}
