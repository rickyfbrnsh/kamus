<?php

namespace Ricky\Kamus;

class Translate {
    public static function translateToSundaLanguage($word)
    {
        switch ($word) {
            case 'satu':
                return 'hiji';
            case 'dua':
                return 'dua';
            default :
                return 'teu acan aya';
        }
    }

    public static function translateToJawaLanguage($word)
    {
        switch ($word) {
            case 'satu':
                return 'siji';
            case 'dua':
                return 'loro';
            default :
                return 'belum ada';
        }
    }
}
