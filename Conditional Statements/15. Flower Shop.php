<?php
$magnoliasCount = intval(readline());
$hyacinthCount = intval(readline());
$rosesCount = intval(readline());
$cactiCount = intval(readline());
$priceForGift = floatval(readline());

const magnoliaPrice = 3.25;
const hyacinthPrice = 4.0;
const rosesPrice = 3.5;
const cactiPrice = 8.0;

$priceForAllMagnolias = magnoliaPrice * $magnoliasCount;
$priceForAllHyacinth = hyacinthPrice * $hyacinthCount;
$priceForAllRoses = rosesPrice * $rosesCount;
$priceForAllCacti = cactiPrice * $cactiCount;

$profitFromAll = $priceForAllCacti + $priceForAllHyacinth + $priceForAllMagnolias + $priceForAllRoses;

$profitFromAll -= $profitFromAll * 0.05;

if($profitFromAll >= $priceForGift)
{
    echo "She is left with " . floor($profitFromAll - $priceForGift) . " leva.";
}
else
{
    echo "She will have to borrow " . ceil($priceForGift - $profitFromAll) . " leva.";
}