<?php
      define('__ROOT__', dirname(dirname(dirname(__FILE__))));
     require_once (__ROOT__."/backend/class.php");
 ?>
<!DOCTYPE html>
<html lang="hun">
<?php require_once __ROOT__."\layout\uniLayout\head.php";?>
<body>
    <?php   require_once __ROOT__."\layout\uniLayout\menu.php";
    $user = $_POST['buyer'];
    $warehouse = $_POST['raktar'];
    $account = $_POST['szamlaszam'];

    $recetiReturn = "
    <form action=\"http://localhost/ProjectH/backend/orderData.php\" method=\"post\">
        <table>
            <tr>
                <td name=\"buyerConfirm\"> $user</td>
            </tr>
            <tr>
                <td name=\"raktarConfirm\">$warehouse </td>
            </tr>
            <tr>
                <td name=\"szamlaszamConfirm\"> $account </td>
            </tr>".
            $warehouseClass->termekker(false, false,false)."
        </table>
        <input type=\"submit\" value=\"Rendelés leadás\">
    </form>";

    echo $recetiReturn;
    ?>
</body>
</html>
