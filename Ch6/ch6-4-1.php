# Name : 曾聖皓<br>
# SID : C113181119<br>
# EX05
<HR>
<?php
function callFunc1(Closure $closure) 
{
    $closure();
}
function callFunc2(Callable $callback) 
{
    $callback();
}

$hello = function() 
{
    echo "Hello, World!<br/>";
};
function hi() 
{
    echo "Hi, World!<br/>";
}


// callFunc1("hi");
callFunc1($hello);
callFunc2("hi");
callFunc2($hello);