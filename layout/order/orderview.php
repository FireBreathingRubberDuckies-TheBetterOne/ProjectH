<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <?php
define("__ROOT__", dirname(dirname(__DIR__))); 
require_once __ROOT__."/layout/uniLayout/menu.php";
 require_once __ROOT__."/layout/uniLayout/head.php";
         require_once (__ROOT__."/backend/class.php");
?>
<link rel="stylesheet" href="../style/css/style.css">
    
</head>
<body>
    
<?php

$orderClass->rendelessor();
?>

</body>
</html>