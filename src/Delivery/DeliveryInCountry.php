<?php

namespace App\Delivery;

class DeliveryInCountry
{
    protected static function calculate(Box $box)
    {
        return $box->volume() * 0.3;
    }

    public static function getPrice(Box $box)
    {
        return static::calculate($box);
    }
}