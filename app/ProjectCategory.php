<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectCategory extends Model
{
    public function post()
    {
        return $this->belongsToMany('App\Project');
    }
}
