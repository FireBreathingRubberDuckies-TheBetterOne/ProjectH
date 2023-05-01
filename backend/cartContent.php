<?php
    define('__ROOT__', dirname(dirname(__FILE__)));
    require_once (__ROOT__."\backend\class.php");
    
if($_SERVER["REQUEST_METHOD"]="POST"){
    $itemQuantity = $_POST['itemQuantity'];
    $jsonstring = file_get_contents('http://localhost/ProjectH/backend/tempProductData.json');
    $jsonValue = json_decode($jsonstring,true);
    if($_SESSION['kart']==null){
        $obj = array(
              "item"=>$jsonValue['termekid'],
              "quantity"=>$itemQuantity
        );
        $_SESSION['kart'][] = $obj;
    }
    else{
        $seletedProdClass -> addItem($jsonValue['termekid'],$itemQuantity);
    }
    header("Location: https://localhost/ProjectH/view/product.php?idTermek=$jsonValue[isokod]");
    exit;
}