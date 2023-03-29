<?php
class WarehouseSystem extends Database{
    
    function termekfajta(){
        $sql = "SELECT nev FROM `fajta`";
        $result = $this->connProduct->query($sql);
        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){     
                    echo "<option>".$row['nev']."</option>";
            }
        }    
    }

    function termekfeltoltes($dropos,$nev,$kep,$ar,$elerheto,$kedvezmeny,$mennyiseg){
        $sql="SELECT fajtid FROM `fajta` WHERE nev=\"$dropos\"";
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
        $sql = "SELECT * FROM `termekek2`;";
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
                 echo "<form action='termekmodositas.php' method='post'>";
                echo "<tr style='border: 1px solid black'>";
                        
                          echo "<td style='border: 1px solid black ; padding:5px'>";
                          //echo $row['nev'];
                          echo "<input type='text' name='nev' value='".$row['nev']."'>";
                          echo "</td>";
                          echo "<td style='border: 1px solid black ; padding:5px'>";
                          //echo $row['ar'];
                          echo "<input type='text' name='ar' value='".$row['ar']."'>";
                          echo "</td>";
                          echo "<td style='border: 1px solid black ; padding:5px'>";
                          if($row['elerheto']==1)
                          {
                            $row['elerheto']="igen";
                          }
                          else{$row['elerheto']="nem";}
                          //echo $row['elerheto'];
                          echo  "<input type='text' name='elerheto' value='".$row['elerheto']."'>";
                          echo "</td>";
                          echo "<td style='border: 1px solid black ; padding:5px'>";
                          //echo $row['kedvezmeny'];
                          echo "<input type='text' name='kedvezmeny' value='".$row['kedvezmeny']."'>%";
                          echo "</td>";
                          echo "<td style='border: 1px solid black ; padding:5px'>";
                          //echo $row['mennyiseg'];
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
        if($elerheto="igen")
        {
            $elerheto=1;
        }
        else {$elerheto=0;}
        
        $sql = "UPDATE `termekek2` SET `nev`=\"$nev\",`ar`=\"$ar\",`elerheto`=\"$elerheto\",`kedvezmeny`=\"$kedvezmeny\",`mennyiseg`=\"$mennyiseg\" WHERE termid=".$termid." ";
        $this->connProduct->query($sql);
    }

    function termekdelete(){  
        $termid=filter_input(INPUT_POST,"delete");
        
        $sql = "DELETE FROM `termekek2` WHERE `termid`=".$termid.";";
        $this->connProduct->query($sql);
        
    }
}

?>