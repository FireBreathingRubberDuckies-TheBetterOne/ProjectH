<?php
    define('__ROOT__', dirname(dirname(dirname(__FILE__))));
    require_once (__ROOT__."\backend\class.php");
?>
<!DOCTYPE html>
<html>
<?php require_once __ROOT__."/layout/uniLayout/head.php";?>
<body class="d-flex flex-column min-vh-100" >
    <?php require_once __ROOT__."/layout/uniLayout/menu.php";?>

    <div id="orderListing" class="h-100 mx-auto my-auto p-1">
        <div class="row">
            <div >
                <div>
                    <?php echo $orderHandlingClass->orderListing();?>
                </div>
            </div>
            <div >
                <div class="row d-flex justify-content-center">
                    <div class="col-3 NettoBrutto"><p>Nettó össz ár: <?php echo $orderHandlingClass->osszArkeres(false); ?> Ft</p></div>
                    <div class="col-3 NettoBrutto"><p>Bruttó össz ár: <?php echo $orderHandlingClass->osszArkeres(true); ?> Ft+Áf</p></div>
                    <div class=" d-flex justify-content-center"><div class="btn-group"> <?php echo $orderHandlingClass-> checkOutValid(); ?></div></div>
                </div>
            </div>
        </div> 
    </div>
    <?php require_once __ROOT__.'\layout\uniLayout\footer.php';?>
</body>
</html>