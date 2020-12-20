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

    public static function explode(string $separator , string $string) : array
    {
        return explode($separator, $string);
    }

    public static function implode(string $glue , array $pieces) : string
    {
        return implode ($glue, $pieces);
    }

    public static function strStr(string $haystack , string $needle)
    {
        return strstr ($haystack, $needle);
    }

    public static function trim(string $string) : string
    {
        return trim($string);
    }

    public static function sha1(string $string) : string
    {
        return sha1($string);
    }

    public static function md5(string $string) : string
    {
        return md5($string);
    }
}