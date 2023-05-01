<?php
class UserHandling extends Database{


    function felhasznalosor()
    {
        $sql = " SELECT access.accessnev,access.accessid,user.felhasznaloid,user.nev,user.email
        FROM `access` JOIN user ON(access.accessid=user.accessid);";
        $result = $this->connUser->query($sql);
        if($result->num_rows>0){
            
        echo "<table>";
        echo "<tr>
                
                <td>Név</td>
                <td>Email</td>
                <td>Access</td>
                </tr>";
                while($row = $result->fetch_assoc()){
                echo "<form action='felhasznalomodositas.php' method='post'><tr>
                    <td><input type='text' name='nev' id='' value='".$row["nev"]."'></td>
                    <td><input type='email' name='email' id='' value='".$row["email"]."'></td>
                    <td><input type='text' name='accessnev' id='' value='".$row["accessnev"]."'></td>
                    <td><button type='submit' name='modosit' value='".$row['felhasznaloid']."'>Módosít</button></td>
                    
                    
                    </tr>
                </form>";
                
                }
                echo "</table>";
                
                
        }
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