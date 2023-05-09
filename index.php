<!-- A főoldal a webshop-hoz -->
<?php
    define('__ROOT__', dirname(__FILE__));
    require_once __ROOT__."\backend\class.php";
?>
<!DOCTYPE html>
<html>
<?php require_once __ROOT__."\layout\uniLayout\head.php";?>
<body class="d-flex flex-column min-vh-100" >
     <?php require_once __ROOT__."\layout\uniLayout\menu.php";?>   -
     <h1 id="logInUser">Üdvözlöm: <?php echo $_SESSION['userLogidIn'][0] ?></h1> 
     <div class="container-fluid">
        
    <div class="row">
        <div class="col-6">
            <?php echo $warehouseClass->newOrder() ?> 
        </div>
        <div class="col-6">
             <?php echo $prodLoadClass->loader(false);?>   
        </div>
    </div>
</div>
    <?php require_once __ROOT__.'\layout\uniLayout\footer.php';?> 
</body>
</html>