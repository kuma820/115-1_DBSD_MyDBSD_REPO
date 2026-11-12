

<?php
function each(&$array)
{
    $res = array();
    $key = key($array);
    if ($key !== null) {
        next($array);
        $res[1] = $res['value'] = $array[$key];
        $res[0] = $res['key'] = $key;
    } else {
        $res = false;
    }
    return $res;
}
?>
<table border="0">

    <tr bgcolor="#CC9919">
        <td>功能</td>
        <td>編號</td>
        <td>名稱</td>
        <td>價格</td>
        <td>數量</td>
    </tr>

<?php
    $flag = false;
    $total = 0;
    while (list($arr, $value) = each($_COOKIE)) {
        if (isset($_COOKIE[$arr]) && is_array($_COOKIE[$arr])) {
            if ($flag) {
                $flag = false;
                $color = "#FF99CC";
            } else {
                $flag = true;
                $color = "#99cFFC";
            }
            echo "<tr bgcolor='" . $color . "'><td>";
            echo "<a href='delete.php?Id=" . $arr . "'>";
            echo "刪除</a></td>";

            while (list($name, $value) = each($_COOKIE[$arr])) {
                echo "<td>" . $value . "</td>";
                if ($name == "Price")
                    $price = $value;
                if ($name == "Quantity")
                    $quantity = $value;
            }
            $total += $price * $quantity;  // 計算總金額
            echo "</tr>";
        }

    }
    if ($total != 0) {  // 顯示總金額
        echo "<tr bgcolor=yellow><td colspan=5 align=right>";
        echo "總金額 = NT$" . $total . "元</td></tr>";
    }
    ?>
</table>

<hr><br>
|<a href="catalog.php">Catalog</a> |
<a href="shoppingcart.php">Mini Cart</a> |