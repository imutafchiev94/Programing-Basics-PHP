<?php

$trip = floatval(readline());
$puzzles = intval(readline());
$dolls = intval(readline());
$teddyBears = intval(readline());
$minions = intval(readline());
$trucks = intval(readline());

$puzzlesProfit = $puzzles * 2.6;
$dollsProfit = $dolls * 3;
$teddyBearsProfit = $teddyBears * 4.1;
$minionsProfit = $minions * 8.2;
$trucksProfit = $trucks * 2;

$totalProfit = $puzzlesProfit + $dollsProfit + $teddyBearsProfit + $minionsProfit + $trucksProfit;

$toysAmount = $puzzles + $dolls + $teddyBears + $minions + $trucks;

if($toysAmount >= 50) {
    $totalProfit -= $totalProfit * 0.25;
}

$totalProfit -= $totalProfit * 0.1;

if($totalProfit >= $trip)
{
    echo "Yes! " . number_format($totalProfit - $trip, 2, ".", "") . " lv left.";
}
else
{
    echo "Not enough money! " .  number_format($trip - $totalProfit, 2, ".", "") . " lv needed.";
}
