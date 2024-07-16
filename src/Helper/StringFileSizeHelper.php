<?php

namespace App\Helper;

class StringFileSizeHelper
{
    public static function humanReadable(int $size, $precision = 2): string
    {
        static $units = ['o','Ko','Mo','Go','To','Po','Ho','Zo','Yo'];
        $step = 1024;
        $i = 0;
        while (($size / $step) > 0.9) {
            $size = $size / $step;
            $i++;
        }
        return round($size, $precision) . ' ' . $units[$i];
    }
}