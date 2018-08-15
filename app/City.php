<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function news()
    {
        return $this->hasMany(News::class);
    }
}
