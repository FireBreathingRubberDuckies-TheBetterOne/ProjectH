<!DOCTYPE html>
<html>
    
<?php define('__ROOT__', dirname(dirname(__FILE__))); 
require_once "menu.php";?>
<?php require_once __ROOT__."\backend\head.php";?>
<body>
    <form action="" method="post" enctype="multipart/form-data">
    Fajta:
        <?php
        
        require_once (__ROOT__."\backend\database.php");
        $data=new Database();
        echo "<select name='dropdown'>";
        $data->__construct();
        $data->drop();
        echo "</select>";
        
        ?>
        Nev
        <input type="text" name="nev" id="">
        Kep
        <input type="file" name="kep" id="">
        Ára
        <input type="text" name="ar" id="">
        Elérhető e
        <input type="checkbox" name="elerhetoseg" id="">
        Kedvezmeny
        <input type="text" name="kedvezmeny" id="">
        Mennyiseg
        <input type="text" name="mennyiseg" id="">

        <input type="submit" value="Feltöltés">
    </form>
    <?php
    if ( isset($_FILES['kep']['tmp_name']) ) {
    $dropos=$_POST["dropdown"];
    $binary=file_get_contents($_FILES["kep"]["tmp_name"]);
    $nev=$_POST["nev"];
    $ar=$_POST["ar"];
    $elerheto=$_POST["elerhetoseg"];
    if($elerheto="on")
    {$elerheto=0;}
    else 
    {
        $elerheto=1;}
    $kedvezmeny=$_POST["kedvezmeny"];
    $mennyiseg=$_POST["mennyiseg"];
    $data->__construct();
    $data->feltoltes($dropos,$nev,$binary,$ar,$elerheto,$kedvezmeny,$mennyiseg);

    }
    ?>

</body>
</html>