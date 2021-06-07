<?php
$budget = floatval(readline());
$season = readline();
$carType = "";
$typeOfClass = "";
$carPrice = 0.0;

switch ($season) {
    case "Summer": {
        if($budget <= 100) {
            $carPrice = $budget * 0.35;
            $carType = "Cabrio";
            $typeOfClass = "Economy class";
        }
        else if($budget > 100 && $budget <= 500) {
            $carPrice = $budget * 0.45;
            $carType = "Cabrio";
            $typeOfClass = "Compact class";
        }
        else if($budget > 500) {
            $carPrice = $budget * 0.9;
            $carType = "Jeep";
            $typeOfClass = "Luxury class";
        }

        break;
    }
    case "Winter": {
        if($budget <= 100) {
            $carPrice = $budget * 0.65;
            $carType = "Jeep";
            $typeOfClass = "Economy class";
        }
        else if($budget > 100 && $budget <= 500) {
            $carPrice = $budget * 0.80;
            $carType = "Jeep";
            $typeOfClass = "Compact class";
        }
        else if($budget > 500) {
            $carPrice = $budget * 0.9;
            $carType = "Jeep";
            $typeOfClass = "Luxury class";
        }

        break;
    }
}

echo "$typeOfClass \n";
echo "$carType - " . number_format($carPrice, 2,".", "");