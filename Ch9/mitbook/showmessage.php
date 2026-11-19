echo "<HR>";
echo "SID: C113181119<br/>";
echo "Name: 曾聖皓<br/>";
echo "EX01<br/>";
echo "<HR>";


<!DOCTYPE html>
<html>    
<head>
<meta charset="utf-8" />
<title>guestbook.php</title>
</head>
<body>
<?php
$file = "guestbook.txt";
// 檢查檔案是否存在, 且不是空檔案
if ( !file_exists($file) or filesize($file) == 0 )
   echo "<h2>目前沒有任何留言！</h2><hr/>";
else
   readfile($file);  // 讀取和顯示留言
?><br/>
| <a href="guestbook.php">新增留言</a> |
</body>
</html>