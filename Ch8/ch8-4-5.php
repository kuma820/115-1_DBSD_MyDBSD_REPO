<?php

echo "<HR>";
echo "SID: C113181119<br/>";
echo "Name: 曾聖皓<br/>";
echo "W08-EX03" . "<br/>";
echo "<HR>";

$error = "";
$msg = ""; // 初始變數值
$name = "";
$username = "";
$showform = true; // 顯示表單

if (isset($_GET["Reg"])) {
    $name = $_GET["Name"];
    $username = $_GET["Username"];
    $pass1 = $_GET["pass1"];
    $pass2 = $_GET["pass2"];
    if (empty($username)) {
        $error = "your Username is empty<br/>";
    } else {
        if (empty($pass1)) {
            $error = "your Password is empty<br/>";
        } else {
            if ($pass1 != $pass2) {
                $error = "your Password is not the same<br/>";
            } else {
                $msg = "your Name is: " . $name . "<br/>";
                $msg .= "your Userame is: " . $username . "<br/>";
                $msg .= "your Password is: " . $pass1 . "<br/>";
                $showform = false;
            }
        }
    }
}
?>
<?php if ($showform) { // 顯示網頁表單
    
        ?>
    <form action="ch08-4-5.php" method="get">
        Name: <input type=text name="Name" /><br />
        ID: <input type=text name="Username" /><br />
        Password: <input type=password name="pass1" /><br />
        Password-again: <input type=password name="pass2" /><br />
        <input type="submit" name="Reg" value="Register User" />
    </form>
    <?php
    } else

        echo $msg;  // 顯示表單處理結果
    ?>