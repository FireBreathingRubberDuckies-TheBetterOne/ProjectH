<?php
     define('__ROOT__', dirname(dirname(dirname(__FILE__))));
    require_once (__ROOT__."/backend/class.php");
?>
<!DOCTYPE html>
<html>
<?php require_once __ROOT__."/layout/uniLayout/head.php";?>
<body>   
    <?php require_once __ROOT__."/layout/uniLayout/menu.php" ;?>
    <div> 
        <form method="post" action="http://localhost/ProjectH/view/checkout/orderConformation.php">
            <p>Megrendelő neve: <input type="text" name="buyer" required></p>
            <p>Kirendeltség ratára: 
                <select name="raktar" id="raktar" required>
                    <option value="" selected disabled hidden>Choose here</option>
                    <option value="debrecenKertvarosRakatr">Debrecen Kerváros Raktár</option>
                    <option value="jozsatekejRaktar">Józsatelek Raktár</option>
                    <option value="EpreskertRaktar">Epreskert Raktár</option>
                </select></p>
            <p>Számlaszám: <input type="text" name="szamlaszam" required></p>
            <input type="submit" value="Megrendel">
        </form>
    </div>
</body>
</html>
