<?php
function calculateInterest($principal, $rate, $time)
{
    $interest = $principal * $rate * $time;
    return $interest;
}

$principal = 1000; 
$InterestRate = 0.05; 
$years = 3; 

$totalInterest = calculateInterest($principal, $InterestRate, $years);
echo "Total interest earned after $years years: $totalInterest";
?>
