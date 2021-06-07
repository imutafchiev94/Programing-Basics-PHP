<?php
$season = readline();
$kilometers = floatval(readline());

$profitForMonth = 0.0;
$profitForSeason = 0.0;

switch ($season) {
    case "Spring": {
        if($kilometers <= 5000) {
            $profitForMonth = $kilometers * 0.75;
        }
        else if($kilometers > 5000 && $kilometers <= 10000) {
            $profitForMonth = $kilometers * 0.95;
        }
        else if($kilometers > 10000 && $kilometers <= 20000)
        {
            $profitForMonth = $kilometers * 1.45;
        }

        $profitForSeason = $profitForMonth * 4;

        break;
    }
    case "Summer": {
        if($kilometers <= 5000) {
            $profitForMonth = $kilometers * 0.90;
        }
        else if($kilometers > 5000 && $kilometers <= 10000) {
            $profitForMonth = $kilometers * 1.1;
        }
        else if($kilometers > 10000 && $kilometers <= 20000)
        {
            $profitForMonth = $kilometers * 1.45;
        }

        $profitForSeason = $profitForMonth * 4;

        break;
    }
    case "Autumn": {
        if($kilometers <= 5000) {
            $profitForMonth = $kilometers * 0.75;
        }
        else if($kilometers > 5000 && $kilometers <= 10000) {
            $profitForMonth = $kilometers * 0.95;
        }
        else if($kilometers > 10000 && $kilometers <= 20000)
        {
            $profitForMonth = $kilometers * 1.45;
        }

        $profitForSeason = $profitForMonth * 4;

        break;
    }
    case "Winter": {
        if($kilometers <= 5000) {
            $profitForMonth = $kilometers * 1.05;
        }
        else if($kilometers > 5000 && $kilometers <= 10000) {
            $profitForMonth = $kilometers * 1.25;
        }
        else if($kilometers > 10000 && $kilometers <= 20000)
        {
            $profitForMonth = $kilometers * 1.45;
        }

        $profitForSeason = $profitForMonth * 4;

        break;
    }
}

$profitForSeason -= $profitForSeason * 0.1;

echo number_format($profitForSeason, 2, ".", "");