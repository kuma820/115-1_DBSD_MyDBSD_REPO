# Name : 曾聖皓<br>
# SID : C113181119<br>
# EX04
<HR>
<?php
$result = 0;
$n = 0;
while ($result <= 10) {
    $result = $result * $n;
    echo "|" . $result;
    $n = $n + 1;
    echo "|" . $n;
    $result++;
}
$n = $n - 1;
echo "result: " . $result;