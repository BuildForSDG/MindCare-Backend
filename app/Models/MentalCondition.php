<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MentalCondition extends Model
{
    protected $guard = [];

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
