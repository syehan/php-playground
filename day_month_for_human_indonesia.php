<?php

function getMonthForHumanId(int $month_number)
{
    $months = [
        "Januari", 
        "Februari", 
        "Maret", 
        "April", 
        "Mei", 
        "Juni", 
        "Juli", 
        "Agustus", 
        "September", 
        "Oktober", 
        "November", 
        "Desember"
    ];

    return $months[$month_number - 1];
}

function getDayForHuman(int $day_of_week)
{
    $days = [
      "Minggu",
      "Senin",
      "Selasa",
      "Rabu",
      "Kamis",
      "Jum'at",
      "Sabtu"
    ];

    return $days[$day_of_week - 1];
}
