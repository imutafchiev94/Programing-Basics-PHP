<?php
$juniors = intval(readline());
$seniors = intval(readline());
$trace = readline();

$feeForAll = 0.0;

switch ($trace) {
    case "trail":{
        $feeForAll = ($juniors * 5.5) + ($seniors * 7.0);

        $feeForAll -= $feeForAll * 0.05;

        break;
    }
    case "cross-country": {
        $feeForAll = ($juniors * 8.0) + ($seniors * 9.5);

        if($juniors + $seniors >= 50) {
            $feeForAll -= $feeForAll * 0.25;
        }

        $feeForAll -= $feeForAll * 0.05;

        break;
    }
    case "downhill": {
        $feeForAll = ($juniors * 12.25) + ($seniors * 13.75);

        $feeForAll -= $feeForAll * 0.05;

        break;
    }
    case "road": {
        $feeForAll = ($juniors * 20.0) + ($seniors * 21.5);

        $feeForAll -= $feeForAll * 0.05;

        break;
    }
}

echo number_format($feeForAll, 2, ".", "");