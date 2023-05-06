<?php
     define('__ROOT__', dirname(dirname(dirname(__FILE__))));
    require_once (__ROOT__."/backend/class.php");
?>
<!DOCTYPE html>
<html>
<?php require_once __ROOT__."/layout/uniLayout/head.php";?>
<body class="d-flex flex-column min-vh-100" >   
    <?php require_once __ROOT__."/layout/uniLayout/menu.php" ;?>
    <div class="checkdiv"> 
        <form method="post" action="http://localhost/ProjectH/view/checkout/orderConformation.php">
             <table>
            <tr>
                <td><p class="p">Megrendelő neve:</p></td>
                <td><input type="text" name="buyer" class="posi" required></td>
            </tr>
            <tr>
                <td><p class="p">Kirendeltség ratára: </p></td>
                <td>
                    <select name="raktar" id="raktar" class="posi" required>
                    <option value="" selected disabled hidden>Choose here</option>
                    <option value="debrecenKertvarosRakatr">Debrecen Kerváros Raktár</option>
                    <option value="jozsatekejRaktar">Józsatelek Raktár</option>
                    <option value="EpreskertRaktar">Epreskert Raktár</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Megrendel" class="order"></td>
            </tr>
             </table>


            
        </form>
    </div>
    <?php require_once __ROOT__.'\layout\uniLayout\footer.php';?>
</body>
</html>
