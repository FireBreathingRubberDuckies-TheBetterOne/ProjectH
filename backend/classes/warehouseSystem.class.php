<?php
class WarehouseSystem extends Database{
    
    function termekfajta($fajtnev){
        $sql = "SELECT * FROM `fajta`";
        $result = $this->connProduct->query($sql);
        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){   
                if($row['fajtnev']==$fajtnev)
                {
                    echo "<option value='".$row['fajtid']."' name='drop2' selected>".$row['fajtnev']."</option>";
                }
                else
                {
                    echo "<option value='".$row['fajtid']."' name='drop2'>".$row['fajtnev']."</option>";
                }  
                    
            }
        }    
    }

    function termekfeltoltes($dropos,$nev,$kep,$ar,$elerheto,$kedvezmeny,$mennyiseg){
        $sql="SELECT fajtid FROM `fajta` WHERE fajtnev=\"$dropos\"";
        $result = $this->connProduct->query($sql);
        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){     
                    $dropos=$row["fajtid"];
            }
        }
        $sql="INSERT INTO `termekek2`(`fajtid`, `nev`, `kep`, `ar`, `elerheto`, `kedvezmeny`, `mennyiseg`) VALUES (?,?,?,?,?,?,?)";
        $statement = $this->connProduct->prepare($sql);
        $statement->bind_param('sssssss', $dropos,$nev,$kep,$ar,$elerheto,$kedvezmeny,$mennyiseg);
        $current_id = $statement->execute() or die("<b>Error:</b> Problem on Insert<br/>");
    }

    function termeksor(){
        $sql = "SELECT fajta.fajtnev,termekek2.nev,termekek2.ar,termekek2.elerheto,termekek2.kedvezmeny,termekek2.mennyiseg,termekek2.termid FROM `termekek2` join fajta USING(fajtid);";
        $result = $this->connProduct->query($sql);
        if($result->num_rows>0){
            
                        echo "<table>";
                        echo "<tr>
                <td>Név</td>
                <td>Ár</td>
                <td>Elérhető e</td>
                <td>Kedvezmény</td>
                <td>Mennyiség</td>
            </tr>";
            
            while($row = $result->fetch_assoc()){   
                var_dump($row);
                 echo "<form action='#' method='post'>";
                echo "<tr style='border: 1px solid black'>";
                            echo "<td style='border: 1px solid black ; padding:5px'>";
                                    
                            echo "<input type='text' name='fajtnev' value='".$row['fajtnev']."'>";
                            echo "</td>";
                          echo "<td style='border: 1px solid black ; padding:5px'>";
                          
                          echo "<input type='text' name='nev' value='".$row['nev']."'>";
                          echo "</td>";
                          echo "<td style='border: 1px solid black ; padding:5px'>";
                          
                          echo "<input type='text' name='ar' value='".$row['ar']."'>";
                          echo "</td>";
                          echo "<td style='border: 1px solid black ; padding:5px'>";
                          if($row['elerheto']==1)
                          {
                            $row['elerheto']="igen";
                          }
                          else{$row['elerheto']="nem";}
                         
                          echo  "<input type='text' name='elerheto' value='".$row['elerheto']."'>";
                          echo "</td>";
                          echo "<td style='border: 1px solid black ; padding:5px'>";
                          
                          echo "<input type='text' name='kedvezmeny' value='".$row['kedvezmeny']."'>%";
                          echo "</td>";
                          echo "<td style='border: 1px solid black ; padding:5px'>";
                          
                          echo "<input type='text' name='mennyiseg' value='".$row['mennyiseg']."'>";
                          echo "</td>";
                          echo "<td> <button type='submit' value='".$row['termid']."' name='termid'>Módosít</button></td>";
                          
                echo "</tr>";
                
                echo "</form>";
                
                    
            }
           echo "</table>";
        }
    }

    function termekmodosit(){
        $termid=filter_input(INPUT_POST,"termid2");
        $nev=filter_input(INPUT_POST,"nev2");
        $ar=filter_input(INPUT_POST,"ar2");
        $elerheto=filter_input(INPUT_POST,"elerheto2");
        $kedvezmeny=filter_input(INPUT_POST,"kedvezmeny2");
        $mennyiseg=filter_input(INPUT_POST,"mennyiseg2");
        $fajtid=filter_input(INPUT_POST,"dropdown");
        if($elerheto="igen")
        {
            $elerheto=1;
        }
        else {$elerheto=0;}
        $sql="SELECT fajtid FROM `fajta` WHERE fajtnev=\"$fajtid\"";
        $result = $this->connProduct->query($sql);
        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){     
                    $fajtid=$row["fajtid"];
            }
        }
        
        $sql = "UPDATE `termekek2` SET fajtid=\"$fajtid\", `nev`=\"$nev\",`ar`=\"$ar\",`elerheto`=\"$elerheto\",`kedvezmeny`=\"$kedvezmeny\",`mennyiseg`=\"$mennyiseg\" WHERE termid=".$termid." ";
        $this->connProduct->query($sql);
    }

    function termekdelete(){  
        $termid=filter_input(INPUT_POST,"delete");
        
        $sql = "DELETE FROM `termekek2` WHERE `termid`=".$termid.";";
        $this->connProduct->query($sql);
        
    }
}

?>