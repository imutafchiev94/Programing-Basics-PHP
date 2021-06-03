<?php
$vegetablesPricePerKg = floatval(readline());
$fruitsPricePerKg = floatval(readline());
$vegetables = intval(readline());
$fruits = intval(readline());

$allVegetablesPrice = $vegetables * $vegetablesPricePerKg;
$allFruitsPrice = $fruits * $fruitsPricePerKg;

$allPrice = $allFruitsPrice + $allVegetablesPrice;

$euro = $allPrice / 1.94;

echo number_format($euro, 2, ".", "");