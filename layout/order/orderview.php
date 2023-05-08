<?php
    define("__ROOT__", dirname(dirname(__DIR__))); 
    require_once (__ROOT__."/backend/class.php");
?>
<!DOCTYPE html>
<html lang="en">
<?php require_once __ROOT__."/layout/uniLayout/head.php"; ?>
 
 <body>
<?php require_once __ROOT__."/layout/uniLayout/menu.php";?>
    <div>
        <?php
            echo $orderHandlingClass->rendelessor();
        ?>
 </div>
<?php require_once __ROOT__.'\layout\uniLayout\footer.php';?>
</body>
</html>