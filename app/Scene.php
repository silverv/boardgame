<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scene extends Model
{
    public function options()
    {
        return $this->hasMany('App\Option', 'scene_id');
    }
}
