echo "<HR>";
echo "SID: C113181119<br/>";
echo "Name: 曾聖皓<br/>";
echo "EX02<br/>";
echo "<HR>";
<?php
$file = basename($_SERVER["PHP_SELF"], ".php");
$fp = fopen($file . ".php","r") 
        or exit("file: $file.php 開啟失敗<br/>");

echo "file: $file.php 開啟成功<br/>";
echo "檔案大小" . filesize($file . ".php") . "<br/>";
fclose($fp);
echo"file: $file.php 關閉成功<br/>";
    