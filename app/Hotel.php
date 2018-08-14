<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    //

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
