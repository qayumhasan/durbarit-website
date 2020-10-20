<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
     /**
     * Get all of the posts for the user.
     */
    public function projects()
    {
        return $this->hasMany('App\Project','cat_id','id');
    }
}
