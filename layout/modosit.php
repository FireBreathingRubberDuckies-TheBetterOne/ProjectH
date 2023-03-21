<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php define('__ROOT__', dirname(dirname(__FILE__))); 
require_once "menu.php";?>

<?php require_once __ROOT__."\backend\head.php";
?>
<link rel="stylesheet" href="..\css\style.css">
</head>
<body>
    <form action="" method="post">

    
    <?php
    require_once (__ROOT__."\backend\database.php");
    $db =new Database();

    

    //6 hely kellene de 5 van mert nem raktam bele az igen nem drop ot az elerhetonek
    
    
    $nev=filter_input(INPUT_POST,"nev");
    $ar=filter_input(INPUT_POST,"ar");
    $elerheto=filter_input(INPUT_POST,"elerheto");
    $kedvezmeny=filter_input(INPUT_POST,"kedvezmeny");
    $mennyiseg=filter_input(INPUT_POST,"mennyiseg");
    $termid=filter_input(INPUT_POST,"termid");
    echo "<form action='modosit.php' method='post' name='formteszt'><table>
        <tr>
            <td>Név</td>
            <td>Ár</td>
            <td>Elérhető e</td>
            <td>Kedvezmény</td>
            <td>Mennyiseg</td>
            <td>'".$termid."'</td>
        </tr>
        <tr>
            <td><input type='text' name='nev2' id='' value='".$nev."'></td>
            <td><input type='text' name='ar2' id='' value='".$ar."'></td>
            <td><input type='text' name='elerheto2' id='' value='".$elerheto."'></td>
            <td><input type='text' name='kedvezmeny2' id='' value='".$kedvezmeny."'></td>
            <td><input type='text' name='mennyiseg2' id='' value='".$mennyiseg."'></td>
            <td><button type='submit' value='".$termid."' name='termid2'>Módosítás végrehajtása</button></td>
            <td><button type='submit' name='delete' value='".$termid."'>Törlés</button></td>
        </tr>
    </table></form>";

    if(isset($_POST['termid2']))
{
    $db->__construct();
    $db->modosit();
}    
else if(isset($_POST['delete']))
{
    $db->__construct();
    $db->delete();
}
    
     
    

    ?>
    </form>
</body>
</html>