<?php
    define('__ROOT__', dirname(dirname(__FILE__))); 
    ?>
<!DOCTYPE html>
<html lang="en">
    <?php
    require_once __ROOT__."/layout/uniLayout/head.php";
    ?>
<body>
    <?php require_once __ROOT__."/layout/uniLayout/menu.php";?>
    <a href="https://localhost/ProjectH/layout/order/orderview.php"><button>Rendelési adatbázis</button></a>
    <a href="https://localhost/ProjectH/layout/productEdit/termeksor.php"><button>Termék adatbázis</button></a>
</body>
</html>