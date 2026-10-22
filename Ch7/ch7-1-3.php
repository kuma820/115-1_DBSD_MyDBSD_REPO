<?php



$scores = array(22, 16, 30, 24) ;
$total = 0;

foreach ($scores as $element) {
    echo"element: $element<br/>";
    $total += $element;
}
echo "Total: $total<br/>";