<?php

namespace App;

class USD
{
    const USD = 1;

    public static function convert(int $sum)
    {
        return static::USD * $sum;
    }

}