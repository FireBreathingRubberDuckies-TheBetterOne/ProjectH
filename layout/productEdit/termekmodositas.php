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

    
    echo "<table>
        <tr>
            <td>Név</td>
            <td>Ár</td>
            <td>Mennyiseg</td>
            
        </tr>
        <tr>
       
            <td><input type='text' name='termnev2' id='' value='".$termnev."'></td>
            <td><input type='text' name='ar2' id='' value='".$ar."'></td>
            <td><input type='text' name='mennyiseg2' id='' value='".$mennyiseg."'></td>
            <td><button type='submit' value='".$termekid."' name='termekid2'>Módosítás végrehajtása</button></td>
            <td><button type='submit' name='delete' value='".$termekid."'>Törlés</button></td>
        </tr>
    </table>";


    
     
    

    ?>
    </form>
    
</body>
</html>