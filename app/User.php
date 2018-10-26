<?php

namespace App;

use App\Traits\Friendable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    use Friendable;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function posts()
    {
        return $this->hasMany('App\Post');
    }

    public function profile()
    {
        return $this->hasOne('App\Profile');
    }

    public function skills()
    {
        return $this->belongsToMany('App\Skill');
    }

    public function likedPosts()
    {
    return $this->morphedByMany('App\Post', 'likeable')->whereDeletedAt(null);
    }


    protected $fillable = [
        'name', 'email', 'password','body','gender','slug','image'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    public function isOnline()
    {
    return Cache::has('user-is-online-' . $this->id);
    }


    protected $hidden = [
        'password', 'remember_token',
    ];
}
