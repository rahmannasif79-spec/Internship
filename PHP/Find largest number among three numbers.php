<?php

$num1 = 25;
$num2 = 40;
$num3 = 15;

if ($num1 >= $num2 && $num1 >= $num3) {
    echo "Largest Number: " . $num1;
} elseif ($num2 >= $num1 && $num2 >= $num3) {
    echo "Largest Number: " . $num2;
} else {
    echo "Largest Number: " . $num3;
}

?>