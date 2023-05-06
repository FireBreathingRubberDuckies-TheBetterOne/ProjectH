<?php 
    define("__ROOT__", dirname(dirname(__DIR__))); 
    require_once (__ROOT__."/backend/class.php");
?>
<!DOCTYPE html>
<html lang="en">
    <?php require_once __ROOT__."/layout/uniLayout/head.php";?>
<body>
    <?php 
        require_once __ROOT__."/layout/uniLayout/menu.php";
        
        if(isset($_POST['termekid'])){
            require_once "termekmodositas.php";
        }
        elseif(isset($_POST['termekid2'])){
            $warehouseClass->termekmodosit();
            echo "<p Class=\"endmessage\">Sikeres módosítás \t
            <a href='termeksor.php'><button>Vissza</button></a></p>";
        }
        elseif(isset($_POST['delete'])){
            $warehouseClass->termekdelete();
            echo "<p Class=\"endmessage\">Sikeres Törlés \t
            <a href='termeksor.php'><button>Vissza</button></a></p>";
        }
        elseif(isset($_POST['hozza'])){
            require_once "termekbeiras.php";
        }
        elseif(isset($_POST['gomb2'])){
            $warehouseClass->termekfeltoltes();
            echo "<p Class=\"endmessage\">Sikeres Hozzáadás \t
            <a href='termeksor.php'><button>Vissza</button></a></p>";
        }
        else{
             echo $warehouseClass->termeksor();
        }
        ?>
</body>
</html>