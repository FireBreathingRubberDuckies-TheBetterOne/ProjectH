<!-- A főoldal a webshop-hoz -->
<?php
    define('__ROOT__', dirname(dirname(__FILE__)));
    require_once "./backend/database.php";
    $db =  new Database();
?>
<!DOCTYPE html>
<html>
<?php require_once "./backend/head.php";?>
<body>
    <?php require_once "./layout/menu.php";?>  
    <h1>Hello</h1>  
    <p>asd</p>
    <p>Domi</p>
</body>
</html>