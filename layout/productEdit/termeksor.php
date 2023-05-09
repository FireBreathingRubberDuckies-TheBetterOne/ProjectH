<?php 
    define("__ROOT__", dirname(dirname(__DIR__))); 
    require_once (__ROOT__."/backend/class.php");
?>
<!DOCTYPE html>
<html lang="en">
    <?php require_once __ROOT__."/layout/uniLayout/head.php";?>
<body class="d-flex flex-column min-vh-100">
    <?php 
        require_once __ROOT__."/layout/uniLayout/menu.php";
        
        if(isset($_POST['termekid'])){
            require_once "termekmodositas.php";
        }
        elseif(isset($_POST['termekid2'])){
            $warehouseClass->termekmodosit();
            echo "<div class=\"d-flex min-vh-100 justify-content-center\" >
            <div class=\"mx-auto my-auto\" id=\"confirmWindow\">
                <h3>Sikeres módosítás!</h3>
                <a class=\"m-auto\" href='termeksor.php'><button>Vissza</button></a>
            </div>
          </div> ";
            
        }
        elseif(isset($_POST['delete'])){
            $warehouseClass->termekdelete();
            echo "<div class=\"d-flex min-vh-100 justify-content-center\" >
            <div class=\"mx-auto my-auto\" id=\"confirmWindow\">
                <h3>Sikeres törlés!</h3>
                <a class=\"m-auto\" href='termeksor.php'><button>Vissza</button></a>
            </div>
          </div> ";
        }
        elseif(isset($_POST['hozza'])){
            require_once "termekbeiras.php";
        }
        elseif(isset($_POST['gomb2'])){
            $warehouseClass->termekfeltoltes();
            echo "<div class=\"d-flex min-vh-100 justify-content-center\" >
            <div class=\"mx-auto my-auto\" id=\"confirmWindow\">
                <h3>Sikeres hozzáadás!</h3>
                <a class=\"m-auto\" href='termeksor.php'><button>Vissza</button></a>
            </div>
          </div> ";
        }
        else{
             echo $warehouseClass->termeksor();
        }
        ?>
         <?php require_once __ROOT__.'\layout\uniLayout\footer.php';?>
</body>
</html>