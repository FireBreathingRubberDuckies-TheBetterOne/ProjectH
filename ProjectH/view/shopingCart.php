<?php
    define('__ROOT__', dirname(dirname(__FILE__)));
    require_once (__ROOT__."\backend\class.php");
?>
<!DOCTYPE html>
<html>
<?php require_once __ROOT__."\layout\uniLayout\head.php";?>
<body>
    <?php require_once __ROOT__."\layout\uniLayout\menu.php";
   
    if(isset($_POST["termekid"]))
    { 
        for($i=0;$i < count($_SESSION['kart']);$i++)
        {   if(isset($_SESSION['kart'][$i]['item']))
            {
            if($_POST["termekid"]==$_SESSION['kart'][$i]["item"])
            {
                
                unset($_SESSION['kart'][$i]["item"]);
                unset($_SESSION['kart'][$i]["quantity"]);

            }
            }
        }
        echo "Sikeresen eltávolította a terméket a kosarából.";
        
    }
    else if(isset($_SESSION['kart']))
    {
        
            $productsClass->termekker();
        var_dump($_SESSION);
    }
    else
    {
       echo "Kosara üres" ;
       var_dump($_SESSION);
    }
    ?>  

    
    
</body>
</html>