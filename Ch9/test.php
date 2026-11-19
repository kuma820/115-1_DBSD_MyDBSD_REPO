echo "<HR>";
echo "SID: C113181119<br/>";
echo "Name: 曾聖皓<br/>";
echo "EX01<br/>";
echo "<HR>";
<?php
$file = basename($_SERVER["PHP_SELF"], ".php");
$path = realpath($file . ".php");
echo"實際路徑: $path <br>";
$part = pathinfo($path);
echo"資料夾: " . $part['dirname'] . "<br>";
echo"檔名: " . $part['basename'] . "<br>";
echo"副檔名: " . $part['extension'] . "<br>";

if(file_exists($file . ".php")){
    echo "檔案: $file.php 存在<br/>";

}else{  
    echo "檔案: $file.php 不存在<br>";
}

if(!copy($file . ".php" , $file . ".bak")){
    echo "檔案: $file.php 複製失敗<br/>";

}else{
    echo "檔案: $file.php 複製成功<br/>";
}


rename($file . ".bak", "test.php");

$file = "test.txt";
unlink($file);   // 刪除檔案
print "檔案: $file 已經刪除<br/>";
?>
</body>

</html>