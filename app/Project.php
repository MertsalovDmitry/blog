<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function categories()
    {
        return $this->belongsToMany('App\ProjectCategory');
    }

    public function slides()
    {
        return $this->hasMany('App\ProjectSlide');
    }
}
