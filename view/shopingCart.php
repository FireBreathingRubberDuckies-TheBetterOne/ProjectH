<?php
    define('__ROOT__', dirname(dirname(__FILE__)));
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
                
                
              unset($_SESSION['kart'][$i]);

            }
            }
        }
        $_SESSION['kart']=array_values($_SESSION['kart']);
        echo "Sikeresen eltávolította a terméket a kosarából.";
        
    }
    else if(isset($_SESSION['kart'])&& !empty($_SESSION['kart']))
    {
        $asd=true;
            $productsClass->termekker($asd);
      echo  " <a href='checkout.php'> <button type='submit'>Checkout</button> </a>";
     
      var_dump(empty($_SESSION['kart']));
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