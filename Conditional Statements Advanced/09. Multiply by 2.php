<?php
$num = floatval(readline());
while ($num >= 0) {
    $result = $num * 2;

    echo "Result: " . number_format($result, 2, ".", "") . "\n";

    $num = floatval(readline());
}

echo "Negative number!";