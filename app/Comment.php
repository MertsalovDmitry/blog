<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    // public function comments()
    // {
    //     return $this->hasMany('App\Comment');
    // }

    public function post()
    {
        return $this->belongsTo('App\Post');
    }

    // public function comment()
    // {
    //     return $this->belongsTo('App\Comment');
    // }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function replies()
    {
        return $this->hasMany(Comment::class, 'parent_id');
    }
}
