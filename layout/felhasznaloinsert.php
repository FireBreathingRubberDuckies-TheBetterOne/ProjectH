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
    <form action="" method="post">
    
    
    <?php
    $data=new Database();
    $selected="selected";
    $data->__construct2();
    $data->felhasznaloaccess($selected);
    
    ?>

<input type="text" name="nev" id="">
    <input type="email" name="email" id="">
    <input type="password" name="jelszo" id="">
    <button type="submit" name="gomb" >Hozzáadás</button>
    </form>
<?php
if(isset($_POST['gomb']))
{
    
$data->__construct2();
$data->felhasznaloinsert();
}
?>
</body>
</html>