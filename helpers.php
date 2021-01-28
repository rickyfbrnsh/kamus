<?php

if (!function_exists('translateToSunda')) {
    function translateToSunda($word)
    {
        return \Ricky\Kamus\Translate::translateToSundaLanguage($word);
    }
}

if (!function_exists('translateToJawa')) {
    function translateToJawa($word)
    {
        return \Ricky\Kamus\Translate::translateToJawaLanguage($word);
    }
}


