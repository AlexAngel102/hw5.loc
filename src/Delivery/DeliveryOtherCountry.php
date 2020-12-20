<?php


namespace App\Delivery;


class DeliveryOtherCountry extends DeliveryInCountry
{
    protected static function calculate(Box $box)
    {
        return parent::calculate($box) * 2;
    }
}