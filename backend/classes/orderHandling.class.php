<?php
class OrderHandling extends Database{

    function rendelessor(){
        $sql = "SELECT rendeles.rendelesid,rendeles.rendelesdatum,tetelek.mennyiseg,termekek.termnev,vasarlo.vasarlonev,user.username\n"

        . "FROM `rendeles` JOIN vasarlo USING(vasarloid)\n"

        . "JOIN user USING(userid)\n"

        . "JOIN tetelek USING(rendelesid)\n"
        ."JOIN termekek USING(termekid)\n"
        ."GROUP BY rendeles.rendelesid\n";
            $result = $this->connProduct->query($sql);
            if($result->num_rows>0){
                $response="
            <table>
            <tr>";
                    
                $response.="
                <td>Rendelés száma</td>
                <td>Termék/ek</td>
                    <td>Mennyiség</td>
                    <td>Rendelés dátuma</td>
                    <td>Vásárló neve</td>
                    <td>Felhasználó neve</td>
                    </tr>";
                    while($row = $result->fetch_assoc()){
                    $response.= "<tr>
                        <td>".$row["rendelesid"]."</td><td>";
                        $sql2 = "SELECT termekek.termnev,tetelek.mennyiseg\n"

                        . "FROM `rendeles` JOIN vasarlo USING(vasarloid)\n"
                        . "JOIN user USING(userid)\n"
                        . "JOIN tetelek USING(rendelesid)\n"
                        ."JOIN termekek USING(termekid)\n"
                        ."WHERE rendeles.rendelesid=$row[rendelesid]\n";

                        $result2 = $this->connProduct->query($sql2);
                            if($result->num_rows>0){
                                $mennyiseg="";
                                while($row2 = $result2->fetch_assoc()){
                                $response.= $row2["termnev"]."<br>";
                                $mennyiseg.=$row2["mennyiseg"]."<br>";
                                }
                                $response.=" </td><td>$mennyiseg";
                            }
                        
                    $response.="</td>
                        <td>".$row["rendelesdatum"]."</td>
                        <td>".$row["vasarlonev"]."</td>
                        <td>".$row["username"]."</td></tr>";
                    
                    }
                    $response.= "</table>";
                    
                    
            }
            echo $response;
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
                                    <div class=\"col-1 rowItem\"><p>".$quantity."</p></div>
                                    <div class=\"col-lg-8 col-md-6 col-sm-4 rowItem\"><p>".$row['termnev']."</p></div>
                                    <div class=\"col-2 rowItem\"><p>".$row['ar']*$quantity." Ft</p></div>";
                                    if($delete==true){
                                        $dinamicTable.="<div class=\"col-1\"> <button type='submit'  value='".$row['termekid']."' name='termekidRemove'>Töröl</button></div>";
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
            return "Sikeresen eltávolította a terméket a kosarából.";
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
}