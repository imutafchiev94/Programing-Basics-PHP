<?php
$days = intval(readline());
$foodInKg = intval(readline());

//in kilograms
$foodForDogPerDay = floatval(readline());
//in kilograms
$foodForCatPerDay = floatval(readline());
//in grams
$foodForTurtlePerDay = floatval(readline());

//in kilograms
$allNeededFoodPerDay = $foodForCatPerDay + $foodForDogPerDay + ($foodForTurtlePerDay / 1000);

$allNeededFoodForAllDays = $allNeededFoodPerDay * $days;

if($allNeededFoodForAllDays <= $foodInKg)
{
    echo floor($foodInKg - $allNeededFoodForAllDays) . " kilos of food left.";
}
else
{
    echo ceil($allNeededFoodForAllDays - $foodInKg) . " more kilos of food are needed.";
}