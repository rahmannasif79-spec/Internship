<?php

$principal = 10000; // Principal Amount
$rate = 5;          // Rate of Interest
$time = 2;          // Time in Years

$simpleInterest = ($principal * $rate * $time) / 100;

echo "Principal: $principal <br>";
echo "Rate: $rate% <br>";
echo "Time: $time Years <br>";
echo "Simple Interest: $simpleInterest";

?>