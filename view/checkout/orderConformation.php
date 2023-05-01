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
                <td><input type=\"text\" name=\"buyerConfirm\" readonly value=\"$user\"></td>
            </tr>
            <tr>
            <td><input type=\"text\" name=\"raktarConfirm\" readonly value=\"$warehouse\"></td>
            </tr>
            <tr>
            <td><input type=\"text\" name=\"'szamlaszamConfirm\" readonly value=\"$account\"></td>
            </tr>".
            $warehouseClass->termekker(false, false,false)."
        </table>
        <input type=\"submit\" value=\"Rendelés leadás\">
    </form>";

    echo $recetiReturn;
    ?>
</body>
</html>
