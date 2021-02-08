<?php

function paramUrl($data = []) : string
{
    $param = [];
    $index = 0;
    $len   = count($data);

    foreach ($data as $key => $value) {
        $value = preg_replace('/\s+/', '+', $value);

        if ($index == 0) {
            $param[] = sprintf('?%s=%s', $key, $value);
        }else{
            $param[] = sprintf('&%s=%s', $key, $value);
        }

        $index++;
    }

    return implode('', $param);
}