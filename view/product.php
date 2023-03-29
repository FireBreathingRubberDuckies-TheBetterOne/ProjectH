<!-- A különböző termékek erre az oldalra töltjük be -->
<?php
    define('__ROOT__', dirname(dirname(__FILE__)));
    require_once (__ROOT__."\backend\database.php");
?>
<!DOCTYPE html>
<html>
    if($post[11]=1){

    } 
    elsei if $post[11]=2

    else
    <?php require_once (__ROOT__."\layout\head.php");?>
<body>
    <?php
    require_once (__ROOT__."\layout\menu.php");
    require_once (__ROOT__."\backend\selectedProduct.php");
    $hh = new SelectedProduct();
    echo $hh->productLoader($_GET['idTermek']);

    $teszt = file_get_contents("http://localhost/ProjectH/backend/tempProductData.json");
    $json = json_decode($teszt, true);
    echo "Teszt rész";
    echo '<pre>'.print_r($json, true).'</pre>';
?>


<script src="http://localhost/ProjectH/backend/scripts/localStorage.js"></script>
</body>
</html>