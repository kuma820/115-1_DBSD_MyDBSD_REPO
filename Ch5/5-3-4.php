# Name : 曾聖皓<br>
# SID : C113181119<br>
# EX04
<HR>

<?php
$total = 0;
for ( $i = 0; $i < 15 ; $i++ ) {
    if ($i %2 == 1) 
        continue;

    echo " | " . $i ;
    $total += $i;
}