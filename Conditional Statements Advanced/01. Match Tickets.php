<?php
$budget = floatval(readline());
$kindOfTicket = readline();
$countOfpeople = intval(readline());

if($countOfpeople <= 4)
{
    $budget -= $budget * 0.75;
    if($kindOfTicket === "Normal" && $budget >= 249.99 * $countOfpeople)
    {
        echo "Yes! You have " . number_format($budget - 249.99 * $countOfpeople, 2, ".", "") . " leva left.";
    }
    else if($kindOfTicket === "Normal" && $budget < 249.99 * $countOfpeople)
    {
        echo "Not enough money! You need " . number_format(249.99 * $countOfpeople - $budget, 2, ".", "") . " leva.";
    }
    else if($kindOfTicket === "VIP" && $budget >= 499.99 * $countOfpeople)
    {
        echo "Yes! You have " . number_format($budget - 499.99 * $countOfpeople, 2, ".", "") . " leva left.";
    }
    else if($kindOfTicket === "VIP" && $budget < 499.99 * $countOfpeople)
    {
        echo "Not enough money! You need " . number_format(499.99 * $countOfpeople - $budget, 2, ".", "") . " leva.";
    }
}
else if($countOfpeople > 4 && $countOfpeople <= 9)
{
    $budget -= $budget * 0.6;
    if($kindOfTicket === "Normal" && $budget >= 249.99 * $countOfpeople)
    {
        echo "Yes! You have " . number_format($budget - 249.99 * $countOfpeople, 2, ".", "") . " leva left.";
    }
    else if($kindOfTicket === "Normal" && $budget < 249.99 * $countOfpeople)
    {
        echo "Not enough money! You need " . number_format(249.99 * $countOfpeople - $budget, 2, ".", "") . " leva.";
    }
    else if($kindOfTicket === "VIP" && $budget >= 499.99 * $countOfpeople)
    {
        echo "Yes! You have " . number_format($budget - 499.99 * $countOfpeople, 2, ".", "") . " leva left.";
    }
    else if($kindOfTicket === "VIP" && $budget < 499.99 * $countOfpeople)
    {
        echo "Not enough money! You need " . number_format(499.99 * $countOfpeople - $budget, 2, ".", "") . " leva.";
    }
}
else if ($countOfpeople > 9 && $countOfpeople <= 24)
{
    $budget -= $budget * 0.5;
    if($kindOfTicket === "Normal" && $budget >= 249.99 * $countOfpeople)
    {
        echo "Yes! You have " . number_format($budget - 249.99 * $countOfpeople, 2, ".", "") . " leva left.";
    }
    else if($kindOfTicket === "Normal" && $budget < 249.99 * $countOfpeople)
    {
        echo "Not enough money! You need " . number_format(249.99 * $countOfpeople - $budget, 2, ".", "") . " leva.";
    }
    else if($kindOfTicket === "VIP" && $budget >= 499.99 * $countOfpeople)
    {
        echo "Yes! You have " . number_format($budget - 499.99 * $countOfpeople, 2, ".", "") . " leva left.";
    }
    else if($kindOfTicket === "VIP" && $budget < 499.99 * $countOfpeople)
    {
        echo "Not enough money! You need " . number_format(499.99 * $countOfpeople - $budget, 2, ".", "") . " leva.";
    }
}
else if ($countOfpeople > 24 && $countOfpeople <= 49)
{
    $budget -= $budget * 0.4;
    if($kindOfTicket === "Normal" && $budget >= 249.99 * $countOfpeople)
    {
        echo "Yes! You have " . number_format($budget - 249.99 * $countOfpeople, 2, ".", "") . " leva left.";
    }
    else if($kindOfTicket === "Normal" && $budget < 249.99 * $countOfpeople)
    {
        echo "Not enough money! You need " . number_format(249.99 * $countOfpeople - $budget, 2, ".", "") . " leva.";
    }
    else if($kindOfTicket === "VIP" && $budget >= 499.99 * $countOfpeople)
    {
        echo "Yes! You have " . number_format($budget - 499.99 * $countOfpeople, 2, ".", "") . " leva left.";
    }
    else if($kindOfTicket === "VIP" && $budget < 499.99 * $countOfpeople)
    {
        echo "Not enough money! You need " . number_format(499.99 * $countOfpeople - $budget, 2, ".", "") . " leva.";
    }
}
else if($countOfpeople >= 50)
{
    $budget -= $budget * 0.25;
    if($kindOfTicket === "Normal" && $budget >= 249.99 * $countOfpeople)
    {
        echo "Yes! You have " . number_format($budget - 249.99 * $countOfpeople, 2, ".", "") . " leva left.";
    }
    else if($kindOfTicket === "Normal" && $budget < 249.99 * $countOfpeople)
    {
        echo "Not enough money! You need " . number_format(249.99 * $countOfpeople - $budget, 2, ".", "") . " leva.";
    }
    else if($kindOfTicket === "VIP" && $budget >= 499.99 * $countOfpeople)
    {
        echo "Yes! You have " . number_format($budget - 499.99 * $countOfpeople, 2, ".", "") . " leva left.";
    }
    else if($kindOfTicket === "VIP" && $budget < 499.99 * $countOfpeople)
    {
        echo "Not enough money! You need " . number_format(499.99 * $countOfpeople - $budget, 2, ".", "") . " leva.";
    }
}