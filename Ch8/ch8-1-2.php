<?php
echo "<HR>";
echo "SID: C113181119<br/>";
echo "Name: 曾聖皓<br/>";
echo "EX04<br/>";
echo "<HR>";
$ip = $_SERVER['REMOTE_ADDR']; // 取得指定伺服器變數
echo "IP ADDRESS：" . $ip . "<br/>";

$path = $_SERVER["SCRIPT_NAME"];
echo "PATH：" . $path . "<br/>";
?>

<table border="1">
<tr>
<td>Key</td>
<td>Value</td>
</tr>

<?php
foreach ($_SERVER as $key => $value) {
echo "<tr><td>" . $key . "</td>";
echo "<td>" . $value . "</td></tr>";
}
?>
</table>