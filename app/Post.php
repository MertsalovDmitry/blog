<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // public function comments()
    // {
    //     return $this->hasMany('App\Comment');
    // }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

    public function author()
    {
        return $this->belongsTo('App\User');
    }

    public function comments()
    {
        // return $this->morphMany(Comment::class, 'commentable')->whereNull('parent_id');
        return $this->morphMany(Comment::class, 'commentable')->where('parent_id' , '0');
    }

    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }
}
