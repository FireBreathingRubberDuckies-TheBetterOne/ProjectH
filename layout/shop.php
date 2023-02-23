<!-- A webshop része az oldalnak -->
<?php
    define('__ROOT__', dirname(dirname(__FILE__)));
    require_once (__ROOT__."\backend\database.php");
    $db =  new Database();
    $searcd = isset($_GET['prod'])?$_GET['prod']:null;

?>
<!DOCTYPE html>
<html>
<?php require_once (__ROOT__."\backend\head.php");?>
<body>
    <?php require_once __ROOT__."\layout\menu.php";?>
    <div id="main">
    <?php require_once __ROOT__."\layout\searchBar.php" ?>    
        
        <?php
            echo $db->loader($searcd);
        ?>  
</div>
</body>
</html>