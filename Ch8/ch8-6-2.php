echo "<HR>";
echo "SID: C113181119<br/>";
echo "Name: 曾聖皓<br/>";
echo "EX01<br/>";
echo "<HR>";
<?php


session_start();

if ( !isset($_SESSION["page_counter"]) ) {
    $_SESSION["page_counter"] = 1;
} else {
    $_SESSION["page_counter"]++;
}

$value = $_SESSION["page_counter"];
echo"使用者Session ID: " . session_id() . "<br>";
echo"頁面訪問次數: " . $value;  

if ($value >= 5) {
    unset($_SESSION["page_counter"]);
    if(!isset($_SESSION["page_counter"])) {
        echo "<br>Session變數page_counter已被刪除";
        session_destroy();
        echo"關閉交談期 <br/>";
    }
}