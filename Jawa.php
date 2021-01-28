<?php

namespace Ricky\Kamus;

class Jawa {
    public static function translate($word)
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
