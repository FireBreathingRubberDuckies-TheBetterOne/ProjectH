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
<<<<<<< HEAD
        $sql = "SELECT  termekid,termnev,ar,mennyiseg,leiras FROM `termekek` ;";
        $result = $this->connProduct->query($sql);
        var_dump($result);
        if($result->num_rows>0 && $result !== false){
            
                        echo "<table>";
                        echo "<tr>
=======
        $sql = "SELECT  * FROM `termekek` ;";
        $result = $this->connProduct->query($sql);
        if($result->num_rows>0){
            
                        echo "<table>";
                        echo "<tr>
                        <td>IsoKód</td>
>>>>>>> origin/Norbi
                <td>Név</td>
                <td>Ár</td>
                <td>Mennyiség</td>
                <td>Leírás</td>
            </tr>";
            
            while($row = $result->fetch_assoc()){   
                 echo "<form action='#' method='post'>";
                echo "<tr style='border: 1px solid black'>";
<<<<<<< HEAD
                            
=======
                        echo "<td style='border: 1px solid black ; padding:5px'>";
                                
                        echo "<input type='text' name='ar' value='".$row['isokod']."'>";
                        echo "</td>";
>>>>>>> origin/Norbi
                          echo "<td style='border: 1px solid black ; padding:5px'>";
                          
                          echo "<input type='text' name='termnev' value='".$row['termnev']."'>";
                          echo "</td>";
                          echo "<td style='border: 1px solid black ; padding:5px'>";
                          
                          echo "<input type='text' name='ar' value='".$row['ar']."'>";
                          echo "</td>";
                          
                          echo "<td style='border: 1px solid black ; padding:5px'>";
                          
                          echo "<input type='text' name='mennyiseg' value='".$row['mennyiseg']."'>";
                          echo "</td>";
                          echo "<td style='border: 1px solid black ; padding:5px'>";
                          
                          echo "<input type='text' name='leiras' value='".$row['leiras']."'>";
                          echo "</td>";
                          echo "<td> <button type='submit' value='".$row['termekid']."' name='termekid'>Módosít</button></td>";
                          
                echo "</tr>";
                
                echo "</form>";
                
                    
            }
           echo "</table>";
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
<<<<<<< HEAD
<<<<<<< HEAD
    function termekker()
=======
    function termekker($asd)
>>>>>>> 19ccd4ab159201f7bd06455c05f9a5c20d371880
    {
        
            for($i=0;$i<count($_SESSION['kart']);$i++)
            {
                if(isset($_SESSION['kart'][$i]['item']))
                {
                $termid=$_SESSION['kart'][$i]['item'];
                $quantity=$_SESSION['kart'][$i]['quantity'];
                $sql = "SELECT  termekid,termnev,ar FROM `termekek` WHERE termekid='$termid' ;";
                $result= $this->connProduct->query($sql);
                
                 if($result->num_rows>0){
                     
while($row = $result->fetch_assoc()){   
    echo "<table>
      <form action='#' method='post'>
     <tr style='border: 1px solid black'>
                
               <td style='border: 1px solid black ; padding:5px'>
              
               ".$row['termnev']."
             </td>
               <td style='border: 1px solid black ; padding:5px'>
              
              ".$row['ar']*$quantity."
               </td>
              
               <td style='border: 1px solid black ; padding:5px'>
              
             ".$quantity."
               </td>";
               if($asd==true)
               {
                echo" <td> <button type='submit' value='".$row['termekid']."' name='termekid'>Töröl</button></td>    ";
               }
              
              echo " </tr>
     </form>
 </table>";
}}}}
 

}
}

=======
}
>>>>>>> origin/Norbi

?>