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
            <div class="col-7" >
                <div class="bg-dark">
                    <?php echo $orderHandlingClass->orderListing();?>
                </div>
            </div>
            <div class="col-5">
                <div class="row d-flex justify-content-center">
                    <div class="col-3"><p>Nettó össz ár: <?php echo $orderHandlingClass->osszArkeres(false); ?> Ft</p></div>
                    <div class="col-3"><p>Bruttó össz ár: <?php echo $orderHandlingClass->osszArkeres(true); ?> Ft+Áf</p></div>
                    <div class=" d-flex justify-content-center"><div class="btn-group"><a href='checkout.php' class="text-center btn btn-sm"> Checkout </a></div></div>
                </div>
            </div>
        </div> 
    </div>
    <?php require_once __ROOT__.'\layout\uniLayout\footer.php';?>
</body>
</html>