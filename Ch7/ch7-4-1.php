<?php
echo "<HR>";
echo "SID: C113181119<br/>";
echo "Name: 曾聖皓<br/>";
echo "EX01<br/>";
echo "<HR>";

$str1 = "PHP and MySQL Web Programming"; // 字串變數
$str2 = " PHP與MySQL網頁設計範例教本 ";

echo "測試英文字串1: " . $str1 . "\"<br/>";
echo "測試中文字串1: " . $str2 . "\"<br/>";

echo "English string length: " . strlen($str1) . "\"<br/>";echo "測試英文字串1: " . $str1 . "\"<br/>";
echo "Chinese string length: " . strlen($str2) . "\"<br/>";

echo "Lower Case: " . strtolower($str1) . "<br/>";
echo "Upper Case: " . strtoupper($str2) . "<br/>";

echo "Remove whitespace from both ends: \"" . trim($str2) . "\"<br/>";
echo "Remove whitespace from start: \"" . ltrim($str2) . "\"<br/>";
echo "Remove whitespace from end: \"" . rtrim($str2) . "\"<br/>";
echo "Remove whitespace from end: \"" . chop($str2) . "\"<br/>";