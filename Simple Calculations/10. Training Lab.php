<?php
$height = floatval(readline()) * 100;
$width = floatval(readline()) * 100;

$width -= 100;

$widthCount = round($width / 70, 0, PHP_ROUND_HALF_DOWN);

$heightCount = round($height / 120, 0, PHP_ROUND_HALF_DOWN);

echo ($widthCount * $heightCount) - 3;

