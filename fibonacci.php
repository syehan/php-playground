<?php

function fibonacci($length = 10)
{
    $fibonacci_numbers = [];

    $range = range(0, $length);
    foreach ($range as $key => $value) {
        $number = $value;

        if($number > 1){
            $number_before = $fibonacci_numbers[$number-1];
            $number_early = $fibonacci_numbers[$number-2];
            $number = $number_before + $number_early;
        }

        $fibonacci_numbers[$key] = $number;
    }

    return $fibonacci_numbers;
}

// fibonacci();
echo implode(', ', fibonacci(30));