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
    ?>
    <!--fluid containerrel kellene megoldani a buttonok nagyságát-->
    <style>
        button{
            
            height:500px;
            width:400px;
        }
    </style>
</head>
<body>
    <a href="felhasznaloksor.php"><button>Felhasználói adatbázis</button></a>
    <a href="termeksor.php"><button>Termék adatbázis</button></a>
    
    
</body>
</html>