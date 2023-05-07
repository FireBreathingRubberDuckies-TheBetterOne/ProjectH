<?php
class OrderHandling extends Database{

    function rendelessor(){
        $response="
                <div id=\"orders\">
                        <div class=\"row\" id=\"orderHeader\">
                            <div class=\"col\">Rendelés száma</div>
                            <div class=\"col\">Termék ISO kód</div>
                            <div class=\"col\">Termék név</div>
                            <div class=\"col\">Forgalmazó</div>
                            <div class=\"col\">Mennyiség</div>
                            <div class=\"col\">Rendelés dátuma</div>
                            <div class=\"col\">Vásárló neve</div>
                            <div class=\"col\">Felhasználó neve</div>
                        </div>
                        <hr>";
                        
        $sql = "SELECT * FROM `rendeles` WHERE 1";

        $result = $this->connProduct->query($sql);
        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
                $teszt = $this->orderLoader($row["rendelesid"]);
                $response .= $teszt."<hr>";
            }
            return $response;
        }
        else{
            $response .= "
                <p>Nem található rendelés az adatbázisban!</p>    
                    </div>
                </div>"; 
            return $response."</div>";
        }
    }

    function orderLoader($orderID){
        $sql = 
            "SELECT
            termekek.isokod,
            termekek.termnev,
            forgalmazo.forgnev,
            tetelek.mennyiseg,
            rendeles.rendelesdatum,
            vasarlo.vasarlonev,
            user.username
            FROM 
            `vasarlo` JOIN `rendeles` USING(vasarloid)
            JOIN `user` USING(userid) 
            JOIN `tetelek` USING (rendelesid)
            JOIN `termekek` USING (termekid)
            JOIN `forgalmazo` USING(forgid)
            WHERE rendeles.rendelesid=$orderID
            "
            ;
        $result = $this->connProduct->query($sql);
        $order=null;
        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
                $today = $row['rendelesdatum'];

                    $order .= "
                <div class=\"row\">
                    <div class=\"col\">".$orderID."</div>
                    <div class=\"col\">$row[isokod]</div>
                    <div class=\"col\">$row[termnev]</div>
                    <div class=\"col\">$row[forgnev]</div>
                    <div class=\"col\">$row[mennyiseg] db</div>
                    <div class=\"col\">$row[rendelesdatum]</div>
                    <div class=\"col\">$row[vasarlonev]</div>
                    <div class=\"col\">$row[username]</div>
                </div>
                ";
            }
            return $order;
        }else{
            return "Hiba történt a betöltés során!";
        }

    }

    function termekker($delete,$tablePart){
        $dinamicTable =null;
        if($tablePart){
            $dinamicTable = 
            "<form action='#' method='post'>
                <div class=\"container\" id=\"checkOut\">";
        }
        for($i=0;$i<count($_SESSION['kart']);$i++){
            if(isset($_SESSION['kart'][$i]['item'])){

                $termid=$_SESSION['kart'][$i]['item'];
                $quantity=$_SESSION['kart'][$i]['quantity'];
                $sql = "SELECT  termekid,termnev,ar FROM `termekek` WHERE termekid='$termid' ;";
                $result= $this->connProduct->query($sql);

                if($result->num_rows>0){
                    while($row = $result->fetch_assoc()){   
                        $dinamicTable .= "
                            <div class=\"row \">
                                    <div class=\"col-1 rowItem cartItems\"><p>".$quantity."</p></div>
                                    <div class=\"col-lg-8 col-md-6 col-sm-4 rowItem cartItems\"><p>".$row['termnev']."</p></div>
                                    <div class=\"col-2 rowItem cartItems\"><p>".$row['ar']*$quantity." Ft</p></div>";
                                    if($delete==true){
                                        $dinamicTable.="<div class=\"col-1 cartItems\"> <button type='submit'  value='".$row['termekid']."' name='termekidRemove' id=\"termekidRemove\">Töröl</button></div>";
                                    }
                            $dinamicTable .="</div>";
                    }
                }
            }   
        }
        if($tablePart){
            $dinamicTable .="</div></form>";
        }
        return $dinamicTable;
    }
    
    function orderListing(){
        if(isset($_POST["termekidRemove"])){ 
            $_POST["termekidRemove"]==null;
            for($i=0;$i < count($_SESSION['kart']);$i++){
                if(isset($_SESSION['kart'][$i]['item'])){
                    if($_POST["termekidRemove"]==$_SESSION['kart'][$i]["item"]){
                        unset($_SESSION['kart'][$i]);
                    }
                }
            }
            $_SESSION['kart']=array_values($_SESSION['kart']);
            return header("Location: http://localhost/ProjectH/view/checkout/shopingCart.php");
        }
        else if(isset($_SESSION['kart'])&& !empty($_SESSION['kart'])){   
                return $this->termekker(true,true,true);
        }
        else{
            return "<p style=\"coolor: white\">Kosara üres</p>" ;
        }
    }

    function osszArkeres($tax){
        if($tax){
            $taxHunagry = 1.27;
        }
        else{
            $taxHunagry = 1;
        }
        $osszAr = 0;
        for($i=0;$i<count($_SESSION['kart']);$i++){
            $termid=$_SESSION['kart'][$i]['item'];
            $quantity=$_SESSION['kart'][$i]['quantity'];
            $sql = "SELECT ar FROM `termekek` WHERE termekid='$termid' ;";
            $result= $this->connProduct->query($sql);
            $row = $result->fetch_assoc();
            $osszAr = $osszAr + ($quantity*$row['ar']);
        }
        return $osszAr*$taxHunagry;
    }

    function checkOutValid(){
        if(count($_SESSION['kart'])>0){
            return "<a href='checkout.php' class=\"text-center btn btn-sm\"> Checkout </a>";
        }
        else{
            return "<a href='' class=\"text-center btn btn-sm\" disabled> Checkout </a>";
        }
    }
}