<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddToCart extends Model
{
    public function getCartCountAttribute($value)
{
    return count($value);
}
}
