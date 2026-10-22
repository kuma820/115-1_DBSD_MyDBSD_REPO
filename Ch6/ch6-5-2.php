<?php 
// 匯率換算函數
print "PHP與MySQL網頁設計EX1<br/>";
function rateExchange($amount, $rate) {
   $result = $amount * $rate;
   return $result;
}
$amount = 1000;
$rate = 28.1;
// 呼叫函數
$result = rateExchange($amount, $rate);
print "1000美金兌換新台幣=". $result ."元<br/>";


echo "<HR>";
echo "SID: C113181119<br/>";
echo "Name: 曾聖皓<br/>";
echo "<HR>";