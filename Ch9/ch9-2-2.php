echo "<HR>";
echo "SID: C113181119<br/>";
echo "Name: 曾聖皓<br/>";
echo "EX02<br/>";
echo "<HR>";
<?php
$file = 'mybooks.txt';
$content = "PHP與MySQL網頁設計範例教本\r\n";
$fp = fopen($file,"w") 
        or exit("file: $file 開啟失敗<br/>");

if(fwrite($fp, $content)){
    echo "file: $file 寫入成功<br/>";
}else{
    echo "file: $file 寫入失敗<br/>";
}
fclose($fp);