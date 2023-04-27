<?php
    session_start();

    $userConfirm = $_POST['buyerConfirm'];
    $warehouseConfirm = $_POST['raktarConfirm'];
    $accountConfirm = $_POST['szamlaszamConfirm'];

    

    $sql = "INSERT INTO `rendeles`(`rendelesid`, `vasarloid`, `rendelesdatum`, `userid`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]')";