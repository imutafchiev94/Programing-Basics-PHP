<?php
$neededHours = intval(readline());
$firmDays = intval(readline());
$workers = intval(readline());

$hoursForTraining = $firmDays * 0.1;

$hoursForWork = (($firmDays - $hoursForTraining) * 8) + (($workers * $firmDays) * 2);


if($neededHours <= $hoursForWork)
{
    echo "Yes!" . floor($hoursForWork - $neededHours) . " hours left.";
}
else
{
    echo "Not enough time!" . ceil($neededHours - $hoursForWork) . " hours needed.";
}

