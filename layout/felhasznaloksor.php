<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <?php
    define('__ROOT__', dirname(dirname(__FILE__))); 
    require_once "menu.php";
    require_once __ROOT__."\backend\head.php";
    require_once (__ROOT__."\backend\database.php");
    ?>
</head>
<body>
    
<?php
$data=new Database();
$data->__construct2();
$data->felhasznalosor();
?>
<a href="felhasznaloinsert.php"><button>Hozzáadás</button></a>
</body>
</html>