<?php

$fuel = readline();
$littres = floatval(readline());

switch ($fuel) {
    case "Diesel": {
        if($littres < 25)
        {
            echo "Fill your tank with diesel!";
        }
        else
        {
            echo "You have enough diesel.";
        }
        break;
    }
    case "Gasoline":
    {
        if ($littres < 25) {
            echo "Fill your tank with gasoline!";
        } else {
            echo "You have enough gasoline.";
        }
        break;
    }
    case "Gas":
    {
        if($littres < 25)
        {
            echo "Fill your tank with gas!";
        }
        else
        {
            echo "You have enough gas.";
        }
        break;
    }
    default: {
        echo "Invalid fuel!";
        break;
    }
}