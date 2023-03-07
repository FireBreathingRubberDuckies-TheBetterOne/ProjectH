<!-- A főoldal a webshop-hoz -->
<?php
    define('__ROOT__', dirname(__FILE__));
    require_once __ROOT__."\backend\database.php";
    $db =  new Database();
?>
<!DOCTYPE html>
<html>
<?php require_once __ROOT__."\layout\head.php";?>
<body>
    <?php require_once __ROOT__."\layout\menu.php";?>  
    
</body>
</html>