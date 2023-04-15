<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    
    <?php define("__ROOT__", dirname(dirname(__DIR__))); 
require_once __ROOT__."\layout\uniLayout\menu.php";?>
<?php require_once __ROOT__."\layout\uniLayout\head.php";?>
<link rel="stylesheet" href="..\style\css\style.css">
</head>
<body>
    <table >
        <?php
        require_once (__ROOT__."\backend\class.php");
        if(isset($_POST['termekid']))
        {
            require_once "termekmodositas.php";
        }
        elseif(isset($_POST['termekid2']))
        {$productsClass->termekmodosit();
            echo "Sikeres módosítás \t
            <a href='termeksor.php'><button>Vissza</button></a>";
        }
        elseif(isset($_POST['delete']))
        {$productsClass->termekdelete();
            echo "Sikeres Törlés \t
            <a href='termeksor.php'><button>Vissza</button></a>";
        }
        elseif(isset($_POST['hozza']))
        {
            require_once "termekbeiras.php";
        }
        elseif(isset($_POST['gomb2']))
        {
            $productsClass->termekfeltoltes();
            echo "Sikeres Hozzáadás \t
            <a href='termeksor.php'><button>Vissza</button></a>";
        }
        else
        {
            $productsClass->termeksor();
            echo '<form action="#" method="post">
        <button type="submit"  name="hozza">Hozzáad</button>
        </form>';
        }
        
        
        
        
        ?>
        
    </table>
    
    
</body>
</html>