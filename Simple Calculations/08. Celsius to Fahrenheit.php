<?php
$celsius = floatval(readline());

$farenheit = $celsius * 1.8 + 32;

echo number_format($farenheit, 2, '.', '');

