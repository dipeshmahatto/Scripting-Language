<?php
// For loop
echo "For loop: ";
for ($i = 0; $i < 5; $i++) {
    echo $i . " ";
}
echo "<br>";

// While loop
echo "While loop: ";
$j = 0;
while ($j < 5) {
    echo $j . " ";
    $j++;
}
echo "<br>";

// Do-While loop
echo "Do-While loop: ";
$k = 0;
do {
    echo $k . " ";
    $k++;
} while ($k < 5);
echo "<br>";

// Foreach loop
echo "Foreach loop: ";
$colors = array("Red", "Green", "Blue");
foreach ($colors as $color) {
    echo $color . " ";
}
echo "<br>";

// Nested loops
echo "Nested loops: <br>";
for ($row = 1; $row <= 3; $row++) {
    for ($col = 1; $col <= 3; $col++) {
        echo $row * $col . " ";
    }
    echo "<br>";
}
?>