<?php
/**
 * Created by PhpStorm.
 * User: adizbek
 * Date: 15.08.2018
 * Time: 21:02
 */

namespace App;


trait CreatedDate
{
    public function date()
    {
        return $this->created_at->format('M d, Y');
    }
}