<?php
$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

echo "Numbers without even numbers: ";
foreach ($numbers as $number) {
    if ($number % 2 == 0) {
        continue;
    }
    echo $number . " ";
}
?>
