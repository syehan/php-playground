<?php

function atbash($string)
{
    $alphabets = range('a','z');

    $reverse_alphabets = array_reverse($alphabets);

    $chiper = [];

    foreach ($alphabets as $key => $value) {
        $chiper[$value] = $reverse_alphabets[$key];
    }

    $result = [];
    
    foreach (str_split($string) as $value) {
        
        $isUpper = ctype_upper($value);

        if(!$isUpper && !isset($chiper[$value])){
            $result[] = $value;
        }else{
            $result[] = $isUpper ? strtoupper($chiper[strtolower($value)]) : $chiper[$value];
        }
        
    }
    

    return implode('', $result); 
}

echo atbash('Yo Whatsapp Youtube Welcome Back to My Channel!');