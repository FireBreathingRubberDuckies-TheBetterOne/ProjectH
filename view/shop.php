<!-- A webshop része az oldalnak -->
<?php
    define('__ROOT__', dirname(dirname(__FILE__)));
    require_once __ROOT__."/backend/class.php";
    $searcd = isset($_GET['prod'])?$_GET['prod']:null;
?>
<!DOCTYPE html>
<html>
<?php require_once (__ROOT__."/layout/uniLayout/head.php");?>
<body>
    <?php require_once __ROOT__."/layout/uniLayout/menu.php";?>
    <div id="main">
    <?php require_once __ROOT__."/layout/uniLayout/searchBar.php" ?>    
        
        <?php
            echo $prodLoadClass->loader($searcd);
        ?>  
</div>
</body>
</html>