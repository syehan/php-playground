<?php

function findDuplicate(array $array_number){
    $tortoise = $array_number[0];
    $hare = $array_number[0];

    while (true) {
        $tortoise = $array_number[$tortoise];
        $hare = $array_number[$array_number[$hare]];

        if($tortoise == $hare)
            break;
    }

    $num1 = $array_number[0];
    $num2 = $tortoise;

    while ($num1 != $num2) {
        $num1 = $array_number[$num1];
        $num2 = $array_number[$num2];
    }

    return $num1;
}

$numbers = isset($_GET['number']) ? explode(',', $_GET['number']) : [1,2,3,4,5,6,7,8,9,7];

echo findDuplicate($numbers);
