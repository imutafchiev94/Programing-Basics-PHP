<?php

$holidays = intval(readline());

$workdays = 365 - $holidays;

$timeToPlay = ($workdays * 63) + ($holidays * 127);

$difference = abs($timeToPlay - 30000);

//echo $difference;

//echo $difference / 60;

$hours = floor($difference / 60);

echo $hours . "\n";
$minutes = $difference % 60;

if(30000 - $timeToPlay >= 0)
{
    echo "Tom sleeps well \n";
    echo "$hours hours and $minutes minutes less for play";
}
else
{
    echo "Tom will run away \n";
    echo "$hours hours and $minutes minutes more for play";
}