<?php

namespace App\Helpers;

class Helper
{
    //limit the number of caracteres in a text
    public static function limitText($text, $limit = 100)
    {
        if (strlen($text) > $limit) {
            $text = substr($text, 0, $limit);
            $text = substr($text, 0, strrpos($text, ' '));
            $etc = '...';
            $text = $text.$etc;
        }

        return $text;
    }
}
