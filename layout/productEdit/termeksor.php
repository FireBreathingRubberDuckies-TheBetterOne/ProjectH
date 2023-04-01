<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    
    <?php define('__ROOT__', dirname(dirname(__FILE__))); 
require_once "menu.php";?>
<?php require_once __ROOT__."\backend\head.php";?>
<link rel="stylesheet" href="..\css\style.css">
</head>
<body>
    <table >
        <?php
        require_once (__ROOT__."\backend\database.php");
        $data=new Database();
        $data->__construct();
        // $data->termeksor();
        ?>
        <a href="termekbeiras.php"><button>Hozzáadás</button></a>
    </table>
    
    
</body>
</html>