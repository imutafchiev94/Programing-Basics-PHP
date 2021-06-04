<?php

$x = intval(readline());
$y = floatval(readline());
$z = intval(readline());
$workers = intval(readline());

$areaForGrapes = $x * 0.4;
$grape = $areaForGrapes * $y;

$wine = $grape / 2.5;

if($wine >= $z)
{
    echo "Good harvest this year! Total wine: " . floor($wine) . " liters. \n";

    $wineForWorkers = ($wine - $z) / $workers;

    echo  ceil($wine - $z) . " liters left -> " . ceil($wineForWorkers) . " liters per person.";

}

else
{
    echo "It will be a tough winter! More " . floor($z - $wine) . " liters wine needed.";
}