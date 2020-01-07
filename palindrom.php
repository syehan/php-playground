<?php


function palindrom($word)
{
    $flippedWord = strrev($word);
    echo $flippedWord;
    echo "<br>";
    echo strcasecmp($flippedWord, $word) === 0 ? 'this is Palindrom' : 'this is not Palindrom';
}

return palindrom('hannnah');