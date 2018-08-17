<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
//2018-08-14 14:24:59+05
    protected $dateFormat = 'Y-m-d H:i:sT';
    protected $table = 'news';

    function city()
    {
        return $this->belongsTo(City::class)->get()->first();
    }

    function date()
    {
        return $this->created_at->format('M d, Y');
    }
}
