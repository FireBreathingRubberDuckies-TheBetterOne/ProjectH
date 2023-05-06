
    <form action="" method="post" >
    
        <?php
        
        require_once (__ROOT__."\backend\class.php");
        
        
        ?>
        <table class="ProductTable">
        <tr class="trHead">
            <td>Név</td><td>Isokod</td><td>Ára</td><td>Mennyiség</td><td colspan="2">Leírás</td>
           
        </tr>
        <tr>
            <td> <input type="text" name="termnev" id="" required>  </td>
            <td><input type="text" name="isokod" id="" required></td>
            <td><input type="number" name="ar" id="" required></td>
            <td><input type="number" name="mennyiseg" id="" required></td>
            <td><input type="text" name="leiras" id="" ></td>
            <td><input type="submit" name="gomb2" value="Feltöltés"></td>
        </tr>
            
        </table>
    </form>
    <a href="termeksor.php"><button>Vissza</button></a>
