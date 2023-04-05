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
    <form action="felhasznaloksor.php" method="post" >
        
        <?php
        

            $nev=filter_input(INPUT_POST,"nev");
            $email=filter_input(INPUT_POST,"email");
            $felhasznaloid=filter_input(INPUT_POST,"modosit");
            $accessnev=filter_input(INPUT_POST,"accessnev");
            
        $db=new Database();
        $db->__construct2();
        $db->felhasznaloaccess($accessnev);
        
        
        echo "<input type='text' name='nev' id='' value='".$nev."'>
        <input type='email' name='email' id='' value='".$email."'>
        <input type='password' name='jelszo' id='' >
        <button type='submit' name='modosit2' value='".$felhasznaloid."'>Módosít</button>
        <button type='submit' name='torles' value='".$felhasznaloid."'>Törlés</button>";
        
        
        ?>


    </form>
    <?php
     if(isset($_POST['modosit2']))
     {
     $db->__construct2();
     $db->felhasznalomodosit();
     }
    else if(isset($_POST['torles']))
        {

        $db->__construct2();
        $db->felhasznalodelete();
        }
        ?>
</body>
</html>