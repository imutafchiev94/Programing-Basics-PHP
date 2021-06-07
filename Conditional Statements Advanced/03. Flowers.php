<?php
$chrysanthemums = intval(readline());
$roses = intval(readline());
$tulips = intval(readline());
$season = readline();
$IsHoliday = readline();

$profitFromAll = 0.0;

if($season == "Spring" || $season == "Summer") {
    if($IsHoliday == "Y") {
        $profitFromAll += $chrysanthemums * (2 + (2 * 0.15)) +
            $roses * (4.1 + (4.1 * 0.15)) + $tulips * (2.5 + (2.5 * 0.15));

    } else {
        $profitFromAll += $chrysanthemums * 2 + $roses * 4.1 + $tulips * 2.5;

    }
    if($season == "Spring" && $tulips > 7) {
        $profitFromAll -= $profitFromAll * 0.05;
    }


} else if($season == "Autumn" || $season == "Winter") {
    if($IsHoliday == "Y") {
        $profitFromAll += $chrysanthemums * (3.75 + (3.75 * 0.15)) +
            $roses * (4.5 + (4.5 * 0.15)) + $tulips * (4.15 + (4.15 * 0.15));

    } else {
        $profitFromAll += $chrysanthemums * 3.75 + $roses * 4.5 + $tulips * 4.15;

    }
    if($season == "Winter" && $roses >= 10) {
        $profitFromAll -= $profitFromAll * 0.1;
    }
}

if($roses + $chrysanthemums + $tulips > 20) {
    $profitFromAll -= $profitFromAll * 0.2;
}

$profitFromAll += 2;

echo number_format($profitFromAll, 2, ".", "");