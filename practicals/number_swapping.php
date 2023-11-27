<?php
$a = 5;
$b = 10;

echo "Before swapping: a = $a, b = $b\n";

// Swapping logic
$temp = $a;// temp is third variable used to swap the two numbers
$a = $b;
$b = $temp;

echo "After swapping: a = $a, b = $b\n";
?>