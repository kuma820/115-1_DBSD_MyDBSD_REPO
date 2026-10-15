
<?php
function printHeader() {
    echo "<h3>STD: C113181119</h3>";
    echo "<h3>Name: 曾聖皓</h3>";
    echo "<h3>EX04<h3/>";
}

printHeader();
$test = 15;
var_dump( $test );
unset($test);
var_dump( $test );