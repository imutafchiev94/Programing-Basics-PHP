<?php
$distance = intval(readline());
$dayOrNight = readline();

$price = 0.0;

if($distance < 20)
{
    $price += 0.7;

    if($dayOrNight === "day")
    {
        $price += 0.79 * $distance;

        echo number_format($price, 2, ".", "");
    }
    else if ($dayOrNight === "night")
    {
        $price += 0.9 * $distance;

        echo number_format($price, 2, ".", "");
    }
}
else if($distance >= 20 && $distance < 100) {
    $price = 0.09 * $distance;

    echo number_format($price, 2, ".", "");
}

else if ($distance >= 50)
{
    $price = 0.06 * $distance;

    echo number_format($price, 2, ".", "");
}