<?php

function random_email(string $domain) : string
{
    $characters       = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString     = '';

    for ($i = 0; $i < 25; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }

    return sprintf('%s@%s', $randomString, $domain);
}

echo random_email('example.com');
