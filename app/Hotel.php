<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use CreatedDate;
    use HasCity;

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }


    public function media()
    {
        return $this->hasMany(Media::class)->get();
    }

    public function stars()
    {
        return view('widget.stars', ['stars' => $this->stars]);
    }
}
