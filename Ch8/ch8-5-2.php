<?php
echo "<HR>";
echo "SID: C113181119<br/>";
echo "Name: 曾聖皓<br/>";
echo "EX04<br/>";
echo "<HR>";


if (isset($_COOKIE["ItemName"])) {
    // 讀取 Cookie 值
    $itemName = $_COOKIE["ItemName"];
    $quantity = $_COOKIE["Quantity"];

    echo "取得ItemName的Cookie值 : " . $itemName . "<br/>";
    echo "取得Quantity的Cookie值 : " . $quantity . "<br/>";

    // 刪除 Cookie (將過期時間設定為過去的時間)
    setcookie("ItemName", "", time() - 3600);
    setcookie("Quantity", "", time() - 3600);
} else {
    $itemName = "white iphone ";
    $quantity = "10";
    
    // 修正拼字錯誤：strtortime -> strtotime
    $date = strtotime("+10 days"); 
    
    // 寫入 Cookie (有效期 10 天)
    setcookie("ItemName", $itemName, $date);
    setcookie("Quantity", $quantity, $date);

    echo "新增名為ItemName的Cookie: " . $itemName . "<br/>";
    echo "新增名為Quantity的Cookie: " . $quantity . "<br/>";
    echo "Cookie期限: " . date("l F j Y h:i:s A", $date) . "<br/>";
}
?>
<br/>
<a href="ch08-5-1.php">Receive Cookie</a>