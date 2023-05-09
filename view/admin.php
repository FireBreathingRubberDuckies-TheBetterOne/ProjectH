<?php
    define('__ROOT__', dirname(dirname(__FILE__))); 
    ?>
<!DOCTYPE html>
<html lang="en">
    <?php
    require_once __ROOT__."/layout/uniLayout/head.php";
    ?>
<body class="d-flex flex-column min-vh-100" >
    <?php require_once __ROOT__."/layout/uniLayout/menu.php";?>
    <table class="checkdiv">
        <td><a href="http://localhost/ProjectH/layout/order/orderview.php"><button >Rendelési adatbázis</button></a></td>
        <td><a href="http://localhost/ProjectH/layout/productEdit/termeksor.php"><button >Termék adatbázis</button></a></td>
    </table>
    <?php require_once __ROOT__.'\layout\uniLayout\footer.php';?>
</body>
</html>