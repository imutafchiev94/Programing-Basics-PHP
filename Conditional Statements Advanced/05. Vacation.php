<?php
$budget = floatval(readline());
$season = readline();

//Morocco Or Alaska
$location = "";
//Hotel, Hut Or Camp
$placeToSleep = "";
$price = 0.0;

switch ($season) {
    case "Summer": {
        $location = "Alaska";

        if($budget <= 1000) {
            $placeToSleep = "Camp";
            $price = $budget * 0.65;
        }
        else if($budget > 1000 && $budget <= 3000) {
            $placeToSleep = "Hut";
            $price = $budget * 0.8;
        }
        else if($budget > 3000) {
            $placeToSleep = "Hotel";
            $price = $budget * 0.9;
        }
        break;
    }
    case "Winter": {
        $location = "Morocco";

        if($budget <= 1000) {
            $placeToSleep = "Camp";
            $price = $budget * 0.45;
        }
        else if($budget > 1000 && $budget <= 3000) {
            $placeToSleep = "Hut";
            $price = $budget * 0.6;
        }
        else if($budget > 3000) {
            $placeToSleep = "Hotel";
            $price = $budget * 0.9;
        }
        break;
    }
}

echo "$location - $placeToSleep - " . number_format($price, 2, ".", "");