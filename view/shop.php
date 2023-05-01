<!-- A webshop része az oldalnak -->
<?php
    define('__ROOT__', dirname(dirname(__FILE__)));
<<<<<<< HEAD
    require_once __ROOT__."/backend/class.php";
=======
    require_once __ROOT__."\backend\class.php";
>>>>>>> origin/Norbi
    $searcd = isset($_GET['prod'])?$_GET['prod']:null;

?>
<!DOCTYPE html>
<html>
<<<<<<< HEAD
<?php require_once (__ROOT__."/layout/uniLayout/head.php");?>
<body>
    <?php require_once __ROOT__."/layout/uniLayout/menu.php";?>
    <div id="main">
    <?php require_once __ROOT__."/layout/uniLayout/searchBar.php" ?>    
=======
<?php require_once (__ROOT__."\layout\uniLayout\head.php");?>
<body>
    <?php require_once __ROOT__."\layout\uniLayout\menu.php";?>
    <div id="main">
    <?php require_once __ROOT__."\layout\uniLayout\searchBar.php" ?>    
>>>>>>> origin/Norbi
        
        <?php
            echo $prodLoadClass->loader($searcd);
        ?>  
</div>
</body>
</html>