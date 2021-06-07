<?php
$vacation = readline();
$group = readline();
$studentsCount = intval(readline());
$nightsCount = intval(readline());

$price = 0.0;
$sport = "";

switch ($vacation) {
    case "Winter":{
        switch ($group) {
            case "boys": {
                $price = 9.6 * $studentsCount * $nightsCount;
                $sport = "Judo";
                break;
            }
            case "girls": {
                $price = 9.6 * $studentsCount * $nightsCount;
                $sport = "Gymnastics";
                break;
            }
            case "mixed": {
                $price = 10 * $studentsCount * $nightsCount;
                $sport = "Ski";
                break;
            }
        }
        break;
    }
    case "Spring":{
        switch ($group) {
            case "boys": {
                $price = 7.2 * $studentsCount * $nightsCount;
                $sport = "Tennis";
                break;
            }
            case "girls": {
                $price = 7.2 * $studentsCount * $nightsCount;
                $sport = "Athletics";
                break;
            }
            case "mixed": {
                $price = 9.5 * $studentsCount * $nightsCount;
                $sport = "Cycling";
                break;
            }
        }
        break;
    }
    case "Summer": {
        switch ($group) {
            case "boys": {
                $price = 15 * $studentsCount * $nightsCount;
                $sport = "Football";
                break;
            }
            case "girls": {
                $price = 15 * $studentsCount * $nightsCount;
                $sport = "Volleyball";
                break;
            }
            case "mixed": {
                $price = 20 * $studentsCount * $nightsCount;
                $sport = "Swimming";
                break;
            }
        }
        break;
    }
}

if($studentsCount >= 50) {
    $price -= $price * 0.5;
}
else if($studentsCount >= 20 && $studentsCount < 50) {
    $price -= $price * 0.15;
}
else if($studentsCount > 10 && $studentsCount < 20) {
    $price -= $price * 0.05;
}

echo "$sport " . number_format($price, 2, ".", "") . " lv.";