# Name : 曾聖皓<br>
# SID : C113181119<br>
# EX06
<HR>
<?php

$weight = 75;
$bmi = function ($height) use ($weight) {
$height = $height / 100.0;
return $weight/$height/$height;
};

$h = 175;
echo "BMI = ". $bmi($h) . "<br/>";