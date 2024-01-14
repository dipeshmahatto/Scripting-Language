<?php


$a = array("Dipesh","Sanjip");
$b = array_change_key_case($a,CASE_UPPER);

for ($i = 0; $i < count($a); $i++){
    echo $b[$i];
}

echo count($a);

?>


