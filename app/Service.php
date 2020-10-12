<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    /**
 * Get the user's full name.
 *
 * @return string
 */
public function getDetailsAttribute($value)
{
    return json_decode($value);
}
}
