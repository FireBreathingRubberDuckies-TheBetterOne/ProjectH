<!-- A különböző termékek erre az oldalra töltjük be -->
<?php
    define('__ROOT__', dirname(dirname(__FILE__)));
    require_once (__ROOT__."\backend\class.php");
?>
<!DOCTYPE html>
<html>
<?php require_once (__ROOT__."\layout\uniLayout\head.php");?>
<body>
    <?php
    require_once __ROOT__."\layout\uniLayout\menu.php";
    echo $seletedProdClass->productLoader($_GET['idTermek']);

    // $teszt = file_get_contents("http://localhost/ProjectH/backend/tempProductData.json");
    // $json = json_decode($teszt, true);
    // echo "Teszt rész";
    // echo '<pre>'.print_r($json, true).'</pre>';
?>


<script src="http://localhost/ProjectH/backend/scripts/localStorage.js"></script>
</body>
</html>