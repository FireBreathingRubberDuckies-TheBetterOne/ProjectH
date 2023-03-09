<?php class Database{
    public $conn = null;
    function __construct($host="localhost",$name = "root", $pass = "", $db = "termekek"){
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


    function drop()
    {
        
        $sql = "SELECT nev FROM `fajta`";
        $result = $this->conn->query($sql);
        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){     
                    echo "<option>".$row['nev']."</option>";
            }
        }    
    }
    function feltoltes($dropos,$nev,$kep,$ar,$elerheto,$kedvezmeny,$mennyiseg)
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
        $current_id = $statement->execute() or die("<b>Error:</b> Problem on Image Insert<br/>");
    }

}?>