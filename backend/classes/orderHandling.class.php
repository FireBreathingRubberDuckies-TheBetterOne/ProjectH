<?php
class OrderHandling extends Database{


    function rendelessor()
    {
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
    function felhasznaloaccess($accessnev)
    {
        echo "<select name='drop' id='' >" ;
        $sql = "SELECT * FROM `access`;";
        $result = $this->connUser->query($sql);
        if($result->num_rows>0)
        {
                while($row = $result->fetch_assoc())
                {if($row["accessnev"]==$accessnev)
                    {
                        echo "<option value='".$row["accessid"]."' name='drop' selected>".$row['accessnev']."</option>";

                    }
                    else
                    {
                        echo "<option value='".$row["accessid"]."' name='drop'>".$row['accessnev']."</option>";

                    }
                }   
        }
        echo "</select>";
    }
    function felhasznaloinsert()
    { 
        $accessid=$_POST['drop'];
        $nev=$_POST['nev'];
        $email=$_POST['email'];
        $jelszokodolva=password_hash($_POST['jelszo'],PASSWORD_DEFAULT);
        $sql="INSERT INTO `user`(`accessid`, `nev`, `email`, `jelszo`) VALUES ('".$accessid."','".$nev."','".$email."','".$jelszokodolva."')";
        $this->connUser->query($sql);
    }
    function felhasznalomodosit()
    {
        $felhasznaloid=filter_input(INPUT_POST,"modosit2");
        $nev=filter_input(INPUT_POST,"nev");
        $email=filter_input(INPUT_POST,"email");
        $drop=filter_input(INPUT_POST,"drop");
        
        if(filter_input(INPUT_POST,"jelszo")!=""){
        
        $jelszo=password_hash(filter_input(INPUT_POST,"jelszo"),PASSWORD_DEFAULT);
            $sql = "UPDATE user SET nev=\"$nev\", email=\"$email\",jelszo=\"$jelszo\", accessid=\"$drop\" WHERE felhasznaloid= ".$felhasznaloid." ";
            $this->connUser->query($sql);    
        }
        else{
            $sql = "UPDATE user SET nev=\"$nev\", email=\"$email\", accessid=\"$drop\" WHERE felhasznaloid= ".$felhasznaloid." ";
            $this->connUser->query($sql);
        }

    }
    function felhasznalodelete()
    {  
        $felhasznaloid=filter_input(INPUT_POST,"torles");
        
        $sql = "DELETE FROM `user` WHERE `felhasznaloid`=".$felhasznaloid." ";
        $this->connUser->query($sql);
        
    }

}