<?php
      define('__ROOT__', dirname(dirname(dirname(__FILE__))));
     require_once (__ROOT__."/backend/class.php");
 ?>
<!DOCTYPE html>
<html lang="hun">
<?php require_once __ROOT__."\layout\uniLayout\head.php";?>
<body class="d-flex flex-column min-vh-100" >
    <?php   require_once __ROOT__."\layout\uniLayout\menu.php";?>
    <div id="finecheck">
        <form action="http://localhost/ProjectH/backend/orderData.php" method="post">
            <div class="row">
                <div class="col-7">
                    <?php echo $orderHandlingClass->termekker(false, false,false); ?>
                </div>
                <div class="col-5" id="rendelo">
                    <div>
                        <div class="form-group row">     
                            <label for="rendelonev" class="col-sm-3 col-form-label">Rendlő Neve:</label>    
                            <div class="col-sm-9">      
                                <input type="text" name="buyerConfirm" id="rendelonev" readonly value=<?php echo $_POST['buyer'] ?>>
                            </div>   
                        </div>
                        <div class="form-group row">     
                            <label for="raktar" class="col-sm-3 col-form-label">Raktár:</label>    
                            <div class="col-sm-9">      
                                <input type="text" name="raktarConfirm" id="raktar" readonly value=<?php echo $_POST['raktar']; ?>>
                            </div>   
                        </div>
                    </div>
                        <div class="float-end">
                        <input type="submit" value="Rendelés leadás" style="background-color:greenyellow;border-radius: 10px;">
                    </div>
                </div>
            </div>
        </form>
    </div>
    <?php require_once __ROOT__.'\layout\uniLayout\footer.php';?>
</body>
</html>


