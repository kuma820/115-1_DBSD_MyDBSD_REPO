# Name : 曾聖皓<br>
# SID : C113181119<br>
# EX04
<HR>
<?php

function printHeader() {
    echo "<h3>STD: C113181119</h3>";
    echo "<h3>Name: 曾聖皓</h3>";
    echo "<h3>EX01<h3/>";
}
function volume($length, $width=10, $height=15) 
{

    print $length."x".$width."x".$height."= ";
    return $length * $width * $height;

}
$l = 10 ;
$w = 20;
$h = 30;
print "盒子體積: ".volume($l, $w, $h)."<br/>";
print "盒子體積: ".volume($l, $w)."<br/>";
print "盒子體積: ".volume($l)."<hr/>";


$func = "volume";
print "盒子體積: ".$func($l, $w, $h)."<br/>";
print "盒子體積: ".$func($l, $w)."<br/>";