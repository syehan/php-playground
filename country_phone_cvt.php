<?php

function country_phone_cvt($phone, $country_code){
    $country_phone = preg_replace("/[^0-9]/", '', $phone);

    switch (substr($country_phone, 0, 1)) {
        case '0':
            $country_phone = $country_code . substr($country_phone, 1);
            break;
        case '8':
            $country_phone = $country_code . $country_phone;
            break;
        default:
            $country_phone = $country_code . $country_phone;
            break;
    }

    return $country_phone;
}
