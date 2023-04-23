<?php
 class Database{
    protected $connProduct = null;
    function __construct(){
         $hostname = ini_get("mysqli.default_host");
 $username = ini_get("mysqli.default_user");
 $password = ini_get("mysqli.default_pw");
        $this->connProduct = new mysqli($hostname,$username,$password,"termekek");
        if($this->connProduct->connect_error ){
            echo "<script>alarm(\"A kapcsolat nem volt sikerese!\");</script>";
            die();
        }
    }
    function __destruct(){
        $this->connProduct->close();
    }
}
?>