<?php
class OrderConformation extends Database{
   
    function orderItemToDb($kart,$buyer){
        $buyerID = "SELECT `vasarloid` FROM `vasarlo` WHERE `vasarlonev`='$buyer'";
        $result = $this->connProduct->query($buyerID);
        $row = $result->fetch_assoc();
        $buyerID = $row['vasarloid'];

        $orderID = "SELECT `rendelesid` FROM `rendeles` Join `vasarlo` USING(vasarloid) WHERE `vasarloid`=$buyerID  ORDER BY  `rendelesdatum` DESC, `rendelesid` DESC LIMIT 1";
        $result = $this->connProduct->query($orderID);
        $row = $result->fetch_assoc();
        $orderID = $row['rendelesid'];

        //SELECT `rendelesid` FROM `rendeles` Join `vasarlo` USING(vasarloid) WHERE `vasarloid`=51  ORDER BY  `rendelesdatum` DESC, `rendelesid` DESC LIMIT 1;

        $sqlLastOrder = "";
        for($i=0;$i<count($kart);$i++){
           $tempItem = $_SESSION['kart'][$i]['item'];
           $tempQunatity = $_SESSION['kart'][$i]['quantity'];

           $sql = "INSERT INTO `tetelek`(`rendelesid`, `termekid`, `mennyiseg`) VALUES ($orderID,$tempItem,$tempItem)";
           $this->connProduct->query($sql);
        }

    }

    /*Vásárló táblába beilesztés*/function buyerToDb($sql){
        $this->connProduct->query($sql);
    }
    /*Rendeleés táblába való beilesztés*/function ordersToDb($buyer,$accName){
        $buyerID = "SELECT `vasarloid` FROM `vasarlo` WHERE `vasarlonev`='$buyer'";
        $result = $this->connProduct->query($buyerID);
        $row = $result->fetch_assoc();
        $buyerID = $row['vasarloid'];

        $accID = "SELECT `userid` FROM `user` WHERE `username`='$accName' ";
        $result = $this->connProduct->query($accID);
        $row = $result->fetch_assoc();
        $accID = $row['userid'];
        
        $current_date= date('Y-m-d H:i');
        $rendelesSQL = "INSERT INTO `rendeles`( `vasarloid`, `rendelesdatum`, `userid`) VALUES ('$buyerID','$current_date','$accID')";

        $this->connProduct->query($rendelesSQL);
    }



}