<?php


namespace App\Delivery;


class Box
{
    private float $hight;
    private float $width;
    private float $length;

    public function __construct(float $hight, float $width, float $length)
    {
        $this->setHight($hight);
        $this->setWidth($width);
        $this->setLength($length);
    }

    public function setHight(float $hight) : void
    {
        $this->hight = $hight;
    }

    public function setWidth(float $width) : void
    {
        $this->width = $width;
    }

    public function setLength(float $length) : void
    {
        $this->length = $length;
    }

    public function volume()
    {
        return $this->hight * $this->width * $this->length;
    }


}