<?php
$mackerel = floatval(readline());
$sprat = floatval(readline());
$bonito = floatval(readline());
$scad = floatval(readline());
$claws = intval(readline());

$bonitoPrice =  $bonito * ($mackerel + ($mackerel * 0.6));
$scadPrice = $scad * ($sprat + ($sprat * 0.8));
$clawsPrice = $claws * 7.5;

$totalPrice = $bonitoPrice + $scadPrice + $clawsPrice;

echo number_format($totalPrice, 2, '.', '');