<form action="#" method="post">
    <?php
    require_once (__ROOT__."\backend\class.php");
    
    $termnev=filter_input(INPUT_POST,"termnev");
    $ar=filter_input(INPUT_POST,"ar");
    $mennyiseg=filter_input(INPUT_POST,"mennyiseg");
    $termekid=filter_input(INPUT_POST,"termekid");
    $leiras=filter_input(INPUT_POST,"leiras");
    
    echo"
    <table class=\"ProductTable\">
        <tr class=\"trHead\">
            <td>Név</td>
            <td>Ár</td>
            <td>Mennyiség</td>
            <td>Leirás</td>
            <td colspan=\"2\"><button type='submit' value='".$termekid."' name='termekid2' class=\"proSub\">Módosítás végrehajtása</button></td>
            
        </tr>
        <tr>
            <td><input type='text' name='termnev2' id='' value='".$termnev."' required></td>
            <td><input type='number' name='ar2' id='' value='".$ar."' required></td>
            <td><input type='number' name='mennyiseg2' id='' value='".$mennyiseg."' required></td>
            <td><input type='text' name='leiras2' id='' value='".$leiras."' ></td>
            <td><button type='submit' name='delete' value='".$termekid."' class=\"deleteButton\">Törlés</button></td>
            <td><a href=\"termeksor.php\"><button class\"BackButton\">Vissza</button></a></td>
            </tr>
    </table>";
?>

</form>
