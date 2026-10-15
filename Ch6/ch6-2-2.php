<?php

function printHeader() {
    echo "<h3>STD: C113181119</h3>";
    echo "<h3>Name: 曾聖皓</h3>";
    echo "<h3>EX02<h3/>";
}
function rateExchange($amount, $rate) {
$result = $amount * $rate;
return $result;
}

$rate = rateExchange(1000, 32.5);

printHeader();
echo "Money : ". $rate ;