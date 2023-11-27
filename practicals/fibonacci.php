<?php
$n = 10; // Change this value to generate a different number of Fibonacci numbers
$a = 0;
$b = 1;

echo "Fibonacci sequence of $n numbers:\n";

for ($i = 0; $i < $n; $i++) {
    echo "$a, ";

    $temp = $a + $b;
    $a = $b;
    $b = $temp;
}
?>
