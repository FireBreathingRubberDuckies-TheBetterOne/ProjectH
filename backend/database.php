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
    
    function loader($lll){
        $sql = null;
        if($lll==null){
            $sql = "SELECT * FROM `users` WHERE 1";
        }
        else{
            $sql = "SELECT * FROM `users` WHERE `faj` = '$lll'";
        }
       
        
        $teszt1 = 0;

        $result = $this->conn->query($sql);
        $product = "<div class=\"container\"><div class=\"row\">";
        $tt = null;
        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
                if($teszt1 == 3){
                    $product .= "
                    <a href=\"http://localhost/ProjectH/view/product.php?idTermek=$row[ID]\" class=\"col-sm-12 col-md-6 col-lg-3 igen m-1\"><div>$row[nev]</div></a>
                    </div><div class=\"row\">";
                    $teszt1 = 0;
                    $tt = $row['nev'];
                    }
                else{
                    $product .= "<a href=\"http://localhost/ProjectH/view/product.php?idTermek=$row[ID]\" class=\"col-sm-12 col-md-6 col-lg-3 igen m-1\"><div>$row[nev]</div></a>";
                    $tt = $row['nev'];
                    $teszt1++;
                }
            }
             $product .= "</div>";
             return $product;
        }
    }
}?>