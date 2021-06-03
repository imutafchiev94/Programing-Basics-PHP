<?php

$volume = intval(readline());
$p1 = intval(readline());
$p2 = intval(readline());
$h = floatval(readline());

$littersFromP1 = $p1 * $h;
$littersFromP2 = $p2 * $h;

$littersInPool = $littersFromP1 + $littersFromP2;

if($littersInPool <= $volume)
{
    $poolPercents = number_format($littersInPool / ($volume / 100), 2, ".", "");

    $p1Percents = number_format($littersFromP1 / ($littersInPool / 100), 2, ".", "");
    $p2Percents = number_format($littersFromP2 / ($littersInPool / 100), 2, ".", "");

    echo "The pool is $poolPercents% full. Pipe 1: $p1Percents%. Pipe 2: $p2Percents%.";
}
else
{
    $poolOverflow = number_format($littersInPool - $volume, 2, ".", "");

    echo "For " . number_format($h, 2, ".", "") . " hours the pool is overflows with $poolOverflow liters.";
}