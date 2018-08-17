<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $dateFormat = 'Y-m-d H:i:sT';

    public function news()
    {
        return $this->hasMany(News::class);
    }
}
