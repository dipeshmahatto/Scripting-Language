<?php

// $principla = 50000;
// $time = 5;
// $rate = 0.36;
// $SI = ($principla*$time*$rate)/100;
// echo "Simple intrest :".$SI;

// function SI(){
// $principla = 100000;
// $time = 1/12;
// $rate = 36;
// $SI = ($principla*$time*$rate)/100;
// echo "Simple intrest :".$SI;
// }

// SI();

class InterestCalculator{
    function calculateSimpleInterest($p,$t,$r){
        $simple_interest = ($p*$t*$r)/100;
        echo $simple_interest;
    }
}

$obj = new InterestCalculator();
$obj->calculateSimpleInterest(100000,1,36);

?>








<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">

    <label for="principla">principla :</label>
    <input type="number" name="principla" id="principla">
    <input type="submit">
    </form>
</body>
</html> -->