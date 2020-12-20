<?php

namespace App;

class USD
{
    const USD = 1;

    public static function convert(float $sum) : float
    {
        return static::USD * $sum;
    }

}