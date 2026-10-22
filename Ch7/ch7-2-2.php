<?php
echo "<HR>";
echo "SID: C113181119<br/>";
echo "Name: 曾聖皓<br/>";
echo "EX03<br/>";
echo "<HR>";

$arr = array(
"Color" => "Black",
"name" => "Chen-Hui-An",
"Shape" => "Triangle",
100
);

$arr["type"] = "PHP";
unset($arr["type"]);

foreach ($arr as $key => $value) {
echo "$key => $value";

}
echo "<br/>";
print_r($arr);
?>