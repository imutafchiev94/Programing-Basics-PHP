<?php
$fuel = readline();
$amountOfFuel = intval(readline());
$cardForDiscount = readline();
$priceForFuel = 0;

const priceForGasoline = 2.22;
const priceForDiesel = 2.33;
const priceForGas = 0.93;

const discountForGasoline = 0.18;
const discountForDiesel = 0.12;
const discountForGas = 0.08;

const smallDiscount = 0.08;
const bigDiscount = 0.1;

switch ($fuel) {
    case "Diesel": {
        $priceForFuel = $amountOfFuel * priceForDiesel;

        if($cardForDiscount === "Yes") {
            $priceForFuel -= $amountOfFuel * discountForDiesel;
        }

        if($amountOfFuel >= 20 && $amountOfFuel <= 25) {
            $priceForFuel -= $priceForFuel * smallDiscount;
        }
        else if($amountOfFuel > 25) {
            $priceForFuel -= $priceForFuel * bigDiscount;
        }
        break;
    }
    case "Gasoline": {
        $priceForFuel = $amountOfFuel * priceForGasoline;

        if($cardForDiscount === "Yes") {
            $priceForFuel -= $amountOfFuel * discountForGasoline;
        }

        if($amountOfFuel >= 20 && $amountOfFuel <= 25) {
            $priceForFuel -= $priceForFuel * smallDiscount;
        }
        else if($amountOfFuel > 25) {
            $priceForFuel -= $priceForFuel * bigDiscount;
        }
        break;
    }
    case "Gas": {
        $priceForFuel = $amountOfFuel * priceForGas;

        if($cardForDiscount === "Yes") {
            $priceForFuel -= $amountOfFuel * discountForGas;
        }

        if($amountOfFuel >= 20 && $amountOfFuel <= 25) {
            $priceForFuel -= $priceForFuel * smallDiscount;
        }
        else if($amountOfFuel > 25) {
            $priceForFuel -= $priceForFuel * bigDiscount;
        }
        break;
    }
}

echo number_format($priceForFuel, 2, ".", "") . " lv.";