<?php
    session_start();
    $getLeght = 0;
    for($i=0;$i<count($_SESSION['kart']);$i++){
        $getLeght = $getLeght + $_SESSION['kart'][$i]['quantity'];
    }
    echo $getLeght;