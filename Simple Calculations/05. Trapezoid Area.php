<?php
$b1 = floatval(readline());
$b2 = floatval(readline());
$h = floatval(readline());

$area = ($b1 + $b2) * $h / 2.0;

echo number_format($area, 2, ".", "");