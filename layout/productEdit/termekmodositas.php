<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


<link rel="stylesheet" href="..\style\css\style.css">
</head>
<body>
    <form action="#" method="post">

    
    <?php
    require_once (__ROOT__."\backend\class.php");
    

    

    //6 hely kellene de 5 van mert nem raktam bele az igen nem drop ot az elerhetonek
    
    
    $nev=filter_input(INPUT_POST,"nev");
    $ar=filter_input(INPUT_POST,"ar");
    $elerheto=filter_input(INPUT_POST,"elerheto");
    $kedvezmeny=filter_input(INPUT_POST,"kedvezmeny");
    $mennyiseg=filter_input(INPUT_POST,"mennyiseg");
    $termid=filter_input(INPUT_POST,"termid");
    $fajtnev=filter_input(INPUT_POST,"fajtnev");
    
    echo "<table>
        <tr>
            <td></td>
            <td>Név</td>
            <td>Ár</td>
            <td>Elérhető e</td>
            <td>Kedvezmény</td>
            <td>Mennyiseg</td>
            <td>'".$termid."'</td>
        </tr>
        <tr>
     <td><select name'dropdown'>";
$productsClass->termekfajta($fajtnev);
  echo" </select></td>     
            <td><input type='text' name='nev2' id='' value='".$nev."'></td>
            <td><input type='text' name='ar2' id='' value='".$ar."'></td>
            <td><input type='text' name='elerheto2' id='' value='".$elerheto."'></td>
            <td><input type='text' name='kedvezmeny2' id='' value='".$kedvezmeny."'></td>
            <td><input type='text' name='mennyiseg2' id='' value='".$mennyiseg."'></td>
            <td><button type='submit' value='".$termid."' name='termid2'>Módosítás végrehajtása</button></td>
            <td><button type='submit' name='delete' value='".$termid."'>Törlés</button></td>
        </tr>
    </table>";


    
     
    

    ?>
    </form>
    
</body>
</html>