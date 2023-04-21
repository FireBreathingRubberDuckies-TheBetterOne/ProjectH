<!-- A főoldal a webshop-hoz -->
<?php
    define('__ROOT__', dirname(__FILE__));
    require_once __ROOT__."\backend\class.php";
?>
<!DOCTYPE html>
<html>
<?php require_once __ROOT__."\layout\uniLayout\head.php";?>
<body>
    
    <?php 
        if(!$_SESSION['userLogiedIn']){
            header("Location: http://localhost/ProjectH/view/Login/login.php");
        }
    require_once __ROOT__."\layout\uniLayout\menu.php"
    ;?>  
    
</body>
</html>