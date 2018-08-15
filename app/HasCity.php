<?php
/**
 * Created by PhpStorm.
 * User: adizbek
 * Date: 15.08.2018
 * Time: 21:02
 */

namespace App;


trait HasCity
{
    public function city()
    {
        return $this->belongsTo(City::class)->first()->name;
    }
}