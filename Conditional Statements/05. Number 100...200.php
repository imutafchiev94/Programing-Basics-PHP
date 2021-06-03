<?php

$num = intval(readline());

if($num < 100)
{
    echo "Less than 100";
}
else if ($num >= 100 && $num <= 200)
{
    echo "Between 100 and 200";
}
else if ($num > 200)
{
    echo "Greater than 200";
}