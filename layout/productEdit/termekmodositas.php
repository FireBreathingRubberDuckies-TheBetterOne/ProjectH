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
    

    
    
    
    $termnev=filter_input(INPUT_POST,"termnev");
    $ar=filter_input(INPUT_POST,"ar");
    $mennyiseg=filter_input(INPUT_POST,"mennyiseg");
    $termekid=filter_input(INPUT_POST,"termekid");
    $leiras=filter_input(INPUT_POST,"leiras");
    
    echo "<table>
        <tr>
            <td>Név</td>
            <td>Ár</td>
            <td>Mennyiseg</td>
            <td>leiras</td>
        </tr>
        <tr>
       
            <td><input type='text' name='termnev2' id='' value='".$termnev."' required></td>
            <td><input type='number' name='ar2' id='' value='".$ar."' required></td>
            <td><input type='number' name='mennyiseg2' id='' value='".$mennyiseg."' required></td>
            <td><input type='text' name='leiras2' id='' value='".$leiras."' required></td>
            <td><button type='submit' value='".$termekid."' name='termekid2'>Módosítás végrehajtása</button></td>
            <td><button type='submit' name='delete' value='".$termekid."'>Törlés</button></td>
        
            </tr>
    </table>";
echo '<a href="termeksor.php"><button>Vissza</button></a>';

    
     
    

    ?>
    </form>
    
</body>
</html>