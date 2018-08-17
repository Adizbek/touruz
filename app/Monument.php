<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Monument extends Model
{
    protected $dateFormat = 'Y-m-d H:i:sT';

    use HasCity;
}
