<?php
    define('__ROOT__', dirname(dirname(__FILE__)));
    require_once (__ROOT__."/backend/class.php");
?>
<!DOCTYPE html>
<html>
<?php require_once __ROOT__."/layout/uniLayout/head.php";?>
<body>   
    <?php require_once __ROOT__."/layout/uniLayout/menu.php" ;?>
    <div> 
    <?php
    
    
    
    
     if(isset($_SESSION['kart']))
    {
        $asd=false;
            $productsClass->termekker($asd);
      echo "<input type=\"radio\" name=\"sietos\">Express szállítás
      <input type=\"radio\" name=\"normal\">Normál szállítás";
      var_dump($_SESSION);
     echo count($_SESSION['kart']) ;
    }
    else
    {
       echo "Kosara üres" ;
       
    }
    ?>
    

    </div>
</body>
</html>
