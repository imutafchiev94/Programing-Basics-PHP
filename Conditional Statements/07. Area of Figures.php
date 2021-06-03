<?php
$figure = readline();

switch ($figure)
{
    case "square": {
        $a = floatval(readline());

        $area = pow($a, 2);

        echo number_format($area, 3, ".", "");
        break;
    }
    case "rectangle": {
        $a = floatval(readline());
        $b = floatval(readline());
        $area = $a * $b;

        echo number_format($area, 3, ".", "");
        break;
    }
    case "circle": {
        $r = floatval(readline());

        $area = pi() * pow($r, 2);

        echo number_format($area, 3, ".", "");
        break;
    }
    case "triangle": {
        $a = floatval(readline());
        $h = floatval(readline());

        $area = ($a * $h) / 2;

        echo number_format($area, 3, ".", "");
        break;
    }
}