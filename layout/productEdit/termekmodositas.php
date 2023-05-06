<?php
echo "<a href=\"termeksor.php\"><button>Vissza</button></a>";
?>
<form action="#" method="post">
    <?php
    require_once (__ROOT__."\backend\class.php");
    
    $termnev=filter_input(INPUT_POST,"termnev");
    $ar=filter_input(INPUT_POST,"ar");
    $mennyiseg=filter_input(INPUT_POST,"mennyiseg");
    $termekid=filter_input(INPUT_POST,"termekid");
    $leiras=filter_input(INPUT_POST,"leiras");
    
    echo"
    <table>
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
            <td><input type='text' name='leiras2' id='' value='".$leiras."' ></td>
            <td><button type='submit' value='".$termekid."' name='termekid2'>Módosítás végrehajtása</button></td>
            <td><button type='submit' name='delete' value='".$termekid."'>Törlés</button></td>
        
            </tr>
    </table>";
?>
</form>