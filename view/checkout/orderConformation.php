<?php
      define('__ROOT__', dirname(dirname(dirname(__FILE__))));
     require_once (__ROOT__."/backend/class.php");
 ?>
<!DOCTYPE html>
<html lang="hun">
<?php require_once __ROOT__."\layout\uniLayout\head.php";?>
<body class="d-flex flex-column min-vh-100" >
    <?php   require_once __ROOT__."\layout\uniLayout\menu.php";?>
    <div>
        <form action="http://localhost/ProjectH/backend/orderData.php" method="post">
            <div class="row">
                <div class="col-7">
                    <?php echo $orderHandlingClass->termekker(false, false,false); ?>
                </div>
                <div class="col-5">
                    <input type="text" name="buyerConfirm" readonly value=<?php echo $_POST['buyer'] ?>>
                    <input type="text" name="raktarConfirm" readonly value=<?php echo $_POST['raktar']; ?>>
                </div>
            </div>
            <div>
                <input type="submit" value="Rendelés leadás">
            </div>
        </form>
    </div>
    <?php require_once __ROOT__.'\layout\uniLayout\footer.php';?>
</body>
</html>
