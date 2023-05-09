<?php
    session_start();
    isset($_SESSION['kart'])?$_SESSION['kart']:$_SESSION['kart']=array();
    isset($_SESSION['userLogidInStatus'])?$_SESSION['userLogidInStatus']:$_SESSION['userLogidInStatus']=false;
    isset($_SESSION['userLogidIn'])?$_SESSION['userLogidIn']:$_SESSION['userLogidIn']=[];

    if($_SESSION['userLogidInStatus']===false){
        header("Location: http://localhost/ProjectH/view/Login/login.php");
    }