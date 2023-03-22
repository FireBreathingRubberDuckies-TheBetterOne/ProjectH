<?php class Database{
    public $conn = null;
    function __construct($host="localhost",$name = "root", $pass = "", $db = "termekek"){
        $this->conn = new mysqli($host, $name,$pass,$db);
        if($this->conn->connect_error){
            echo "<script>alarm(\"A kapcsolat nem volt sikerese!\");</script>";
            die();
        }
    }
    function __construct2($host="localhost",$name = "root", $pass = "", $db = "felhasznalok"){
        $this->conn = new mysqli($host, $name,$pass,$db);
        if($this->conn->connect_error){
            echo "<script>alarm(\"A kapcsolat nem volt sikerese!\");</script>";
            die();
        }
    }
    function __destruct(){
        $this->conn->close();
    }
    /*
        <div class="container">
            <div class="row">
                <a href=\"http://localhost/0.3.0/layout/product.php?idTermek=$row[ID]\">
                    <div class=\"col-sm-12 col-md-6 col-lg-3 igen\">
                        $row[nev]
                    </div>
                </a>
            </div>  
        </div>
    

         for($i = 0; $i < 4;$i++){
                    $product .= "<a href=\"http://localhost/0.3.0/layout/product.php?idTermek=$row[ID]\"><div class=\"col-sm-12 col-md-6 col-lg-3 igen\">$row[nev]</div></a>";
        }
    */
    function loader($lll){
        $sql = null;
        if($lll==null){
            $sql = "SELECT * FROM `users` WHERE 1";
        }
        else{
            $sql = "SELECT * FROM `users` WHERE `faj` = '$lll'";
        }
        // $dbLength = $this->conn->query("SELECT count(`ID`) FROM `users` WHERE 1;");
        // $asd = $dbLength->fetch_assoc();
        
        $teszt1 = 0;

        $result = $this->conn->query($sql);
        $product = "<div class=\"container\"><div class=\"row\">";
        $tt = null;
        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
                if($teszt1 == 3){
                    $product .= "
                    <a href=\"http://localhost/0.3.0/layout/product.php?idTermek=$row[ID]\" class=\"col-sm-12 col-md-6 col-lg-3 igen m-1\"><div>$row[nev]</div></a>
                    </div><div class=\"row\">";
                    $teszt1 = 0;
                    $tt = $row['nev'];
                    }
                else{
                    $product .= "<a href=\"http://localhost/0.3.0/layout/product.php?idTermek=$row[ID]\" class=\"col-sm-12 col-md-6 col-lg-3 igen m-1\"><div>$row[nev]</div></a>";
                    $tt = $row['nev'];
                    $teszt1++;
                }
            }
             $product .= "</div>";
             return $product;
        }
    }


    function termekfajta()
    {
        
        $sql = "SELECT nev FROM `fajta`";
        $result = $this->conn->query($sql);
        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){     
                    echo "<option>".$row['nev']."</option>";
            }
        }    
    }
    function termekfeltoltes($dropos,$nev,$kep,$ar,$elerheto,$kedvezmeny,$mennyiseg)
    {
        
        $sql="SELECT fajtid FROM `fajta` WHERE nev=\"$dropos\"";
        $result = $this->conn->query($sql);
        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){     
                    $dropos=$row["fajtid"];
            }
        }

        $sql="INSERT INTO `termekek2`(`fajtid`, `nev`, `kep`, `ar`, `elerheto`, `kedvezmeny`, `mennyiseg`) VALUES (?,?,?,?,?,?,?)";
        
        $statement = $this->conn->prepare($sql);
        $statement->bind_param('sssssss', $dropos,$nev,$kep,$ar,$elerheto,$kedvezmeny,$mennyiseg);
        $current_id = $statement->execute() or die("<b>Error:</b> Problem on Insert<br/>");
    }

    function termeksor()
    {
        $sql = "SELECT * FROM `termekek2`;";
        $result = $this->conn->query($sql);
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
    function termekmodosit()
    {
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
   $this->conn->query($sql);
        

    }
    function termekdelete()
    {  
        $termid=filter_input(INPUT_POST,"delete");
        
        $sql = "DELETE FROM `termekek2` WHERE `termid`=".$termid.";";
        $this->conn->query($sql);
        
    }
    function felhasznalosor()
    {
        $sql = " SELECT access.accessnev,access.accessid,user.felhasznaloid,user.nev,user.email
        FROM `access` JOIN user ON(access.accessid=user.acccessid);";
        $result = $this->conn->query($sql);
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
                    <td><button type='submit'name='delete' value='".$row['felhasznaloid']."'>Törlés</button></td>
                </tr>
                </form>";
                var_dump($row);
                }
                echo "</table>";
                
                
        }
    }
    function felhasznaloaccess()
    {
        $sql = "SELECT * FROM `access`;";
        $result = $this->conn->query($sql);
        if($result->num_rows>0)
        {
                while($row = $result->fetch_assoc())
                {
                    echo "<option value='".$row["accessid"]."' name='drop'>".$row['accessnev']."</option>";
                }   
        }
    }
    function felhasznaloinsert()
    { 
        $accessid=$_POST['felhasznalodrop'];
        $nev=$_POST['nev'];
        $email=$_POST['email'];
        $jelszokodolva=password_hash($_POST['jelszo'],PASSWORD_DEFAULT);
        $sql="INSERT INTO `user`(`acccessid`, `nev`, `email`, `jelszo`) VALUES ('".$accessid."','".$nev."','".$email."','".$jelszokodolva."')";
        $this->conn->query($sql);
    }
    function felhasznalomodosit()
    {
        $felhasznaloid=filter_input(INPUT_POST,"modosit");
        $nev=filter_input(INPUT_POST,"nev");
        $email=filter_input(INPUT_POST,"email");
        
    
    
    
    $sql = "UPDATE `user` SET `nev`=\"$nev\",`email`=\"$email\", WHERE felhasznalo=".$felhasznaloid." ";
   $this->conn->query($sql);
        

    }
    function felhasznalodelete()
    {  
        $felahasznaloid=filter_input(INPUT_POST,"delete");
        
        $sql = "DELETE FROM `termekek2` WHERE `termid`=".$felhasznaloid.";";
        $this->conn->query($sql);
        
    }

}?>