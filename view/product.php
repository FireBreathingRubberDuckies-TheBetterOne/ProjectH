<!-- A különböző termékek erre az oldalra töltjük be -->
<?php
    define('__ROOT__', dirname(dirname(__FILE__)));
    require_once (__ROOT__."\backend\class.php");
?>
<!DOCTYPE html>
<html>
<?php require_once (__ROOT__."\layout\uniLayout\head.php");?>
<body class="d-flex flex-column min-vh-100" >
    <?php
    require_once __ROOT__."\layout\uniLayout\menu.php";
    echo $seletedProdClass->productLoader($_GET['idTermek']);
?>
 <?php require_once __ROOT__.'\layout\uniLayout\footer.php';?>
</body>
</html>