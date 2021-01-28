<?php

namespace Ricky\Kamus;

class Sunda {
    public static function translate($word)
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
}
