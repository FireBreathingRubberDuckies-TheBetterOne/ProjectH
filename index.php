<!-- A főoldal a webshop-hoz -->
<?php
    define('__ROOT__', dirname(__FILE__));
    require_once __ROOT__."\backend\class.php";
?>
<!DOCTYPE html>
<html>
<?php require_once __ROOT__."\layout\uniLayout\head.php";?>
<body class="d-flex flex-column min-vh-100" >
    <?php require_once __ROOT__."\layout\uniLayout\menu.php";?>  
    
    <?php require_once __ROOT__.'\layout\uniLayout\footer.php';?>
</body>
</html>