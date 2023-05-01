<?php
    define('__ROOT__', dirname(dirname(__FILE__)));
    require_once (__ROOT__."\backend\class.php");

    $userConfirm = $_POST['buyerConfirm'];
    $warehouseConfirm = $_POST['raktarConfirm'];
    // $accountConfirm = $_POST['szamlaszamConfirm'];

    $tetelekSQL = "INSERT INTO `tetelek`(`rendelesid`, `termekid`, `mennyiseg`) VALUES ('[value-1]','[value-2]','[value-3]')";
    $vasarloSQL = "INSERT INTO `vasarlo`(`vasarlonev`, `szallitasicim`) VALUES ('$userConfirm','$warehouseConfirm')";

    $orderConfomationCLass->buyerToDb($vasarloSQL);
    $orderConfomationCLass->ordersToDb($userConfirm,$_SESSION['userLogidIn'][0]);
    $orderConfomationCLass->orderItemToDb($_SESSION['kart'],$userConfirm);

    $_SESSION['kart']=[];
    header('LOcation: http://localhost/ProjectH/index.php');