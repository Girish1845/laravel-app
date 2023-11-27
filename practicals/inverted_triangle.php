<?php
$rows = 5; // Change this value to create a different-sized inverted triangle

for ($i = $rows; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {//iner loop
        echo "* ";
    }
    echo "\n";
}
?>