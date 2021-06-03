<?php
$length = intval(readline());
$width = intval(readline());
$height = intval(readline());
$percent = floatval(readline());

$volume = ($length * $width * $height) / 1000;

$water = $volume - $volume * $percent / 100;

echo number_format($water, 3, ".", "");