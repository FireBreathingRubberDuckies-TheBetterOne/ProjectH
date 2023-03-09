<!DOCTYPE html>
<html>
    
<?php define('__ROOT__', dirname(dirname(__FILE__))); 
require_once "menu.php";?>
<?php require_once __ROOT__."\backend\head.php";?>
<body>
    <form action="" method="post">
    
        <?php
        
        require_once (__ROOT__."\backend\database.php");
        $data=new Database();
        echo "<select name='dropdown'>";
        $data->__construct();
        $data->drop();
        echo "</select>";
        
        
        
        ?>
    

    </form>
</body>
</html>