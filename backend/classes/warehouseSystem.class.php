<?php
class WarehouseSystem extends Database{
    function termekfeltoltes(){
        $isokod=filter_input(INPUT_POST,"isokod");
        $termnev=filter_input(INPUT_POST,"termnev");
        $ar=filter_input(INPUT_POST,"ar");
        $mennyiseg=filter_input(INPUT_POST,"mennyiseg");
        $leiras=filter_input(INPUT_POST,"leiras");
        $sql="INSERT INTO `termekek`(isokod,`termnev`,`ar`, `mennyiseg`,leiras) VALUES (?,?,?,?,?)";
        $statement = $this->connProduct->prepare($sql);
        $statement->bind_param('sssss', $isokod,$termnev,$ar,$mennyiseg,$leiras);
        $current_id = $statement->execute() or die("<b>Error:</b> Problem on Insert<br/>");
    }

    function termeksor(){
        $sql = "SELECT  termekid,termnev,ar,mennyiseg,leiras FROM `termekek` ;";
        $result = $this->connProduct->query($sql);
        $tableReturn = '';
        if($result->num_rows>0 && $result !== false){
            $tableReturn .="
                         <table class=\"ProductTable\">
                         <tr class=\"trHead\">
                <td>Név</td>
                <td>Ár</td>
                <td>Mennyiség</td>
                <td>Leírás</td>
                <td><form action=\"#\" method=\"post\">
                <button type=\"submit\"  name=\"hozza\">Hozzáad</button>
            </form>
            </td>
            </tr>";
            
            while($row = $result->fetch_assoc()){   
                $tableReturn.=
                  "<form action='#' method='post'>
                 <tr>
                            
                           <td>
                        
                           <input type='text' name='termnev' value='".$row['termnev']."' readonly>
                           </td>
                           <td>
        
                           <input type='text' name='ar' value='".$row['ar']."' readonly>
                           </td>
        
                           <td>
        
                           <input type='text' name='mennyiseg' value='".$row['mennyiseg']."' readonly>
                           </td>
                           <td>
        
                           <input type='text' name='leiras' value='".$row['leiras']."' readonly>
                           </td>
                           <td>
                                <form action=\"#\" method=\"post\">
                                    <button type='submit' value='".$row['termekid']."' name='termekid'>Módosít</button>
                                </form> 
                            </td>
                          
                 </tr>
                
                 </form>";
                
                    
            }
           $tableReturn.= "</table>";
           return $tableReturn;
        }
    }

    function termekmodosit(){
        $termekid=filter_input(INPUT_POST,"termekid2");
        $termnev=filter_input(INPUT_POST,"termnev2");
        $ar=filter_input(INPUT_POST,"ar2");
        $leiras=filter_input(INPUT_POST,"leiras2");
        $mennyiseg=filter_input(INPUT_POST,"mennyiseg2");
        
       
        
        $sql = "UPDATE `termekek` SET  `termnev`=\"$termnev\",`ar`=\"$ar\",`mennyiseg`=\"$mennyiseg\",`leiras`=\"$leiras\" WHERE termekid=".$termekid." ";
        $this->connProduct->query($sql);
    }

    function termekdelete(){  
        $termekid=filter_input(INPUT_POST,"delete");
        
        $sql = "DELETE FROM `termekek` WHERE `termekid`=".$termekid.";";
        $this->connProduct->query($sql);
        
    }
}?>