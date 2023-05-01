<?php
    define('__ROOT__', dirname(dirname(__FILE__)));
<<<<<<< HEAD
    require_once (__ROOT__."/backend/class.php");
?>
<!DOCTYPE html>
<html>
<?php require_once __ROOT__."/layout/uniLayout/head.php";?>
<body>
    <?php require_once __ROOT__."/layout/uniLayout/menu.php";
   
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
      echo  " <a href='checkout.php'> <button type='submit'>Checkout</button> </a>";
    }
    else
    {
       echo "Kosara üres" ;
       
    }
    ?>  

    
=======
    require_once (__ROOT__."\backend\database.php");
?>
<!DOCTYPE html>
<html>
<?php require_once __ROOT__."\layout\head.php";?>
<body>
    <?php require_once __ROOT__."\layout\menu.php";?>  
    <h2>Kosár</h2>
>>>>>>> origin/Norbi
    
</body>
</html>