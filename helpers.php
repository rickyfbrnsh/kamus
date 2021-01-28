<?php

if (!function_exists('translateToJawa')) {
    function translateToJawa($word)
    {
        return \Ricky\Kamus\Jawa::translate($word);
    }
}

if (!function_exists('translateToSunda')) {
    function translateToSunda($word)
    {
        return \Ricky\Kamus\Sunda::translate($word);
    }
}


