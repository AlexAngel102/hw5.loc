<?php


namespace App;


class Str
{

    public static function toUpper(string $string) : string
    {
        return strtoupper($string);
    }

    public static function toLower(string $string) : string
    {
        return strtolower($string);
    }

    public static function subStr(string $string, int $offsset, int $length) : string
    {
        return substr($string, $offsset, $length);
    }

    public static function replace($search, $replace, $subject)
    {
        return str_replace($search, $replace, $subject);
    }

    public static function length(string $string) : int
    {
        return strlen($string);
    }

    public static function explode()
    {

    }

    public static function implode()
    {

    }

    public static function strStr()
    {

    }

    public static function trim()
    {

    }

    public static function sha1()
    {

    }

    public static function md5()
    {

    }
}