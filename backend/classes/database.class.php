<?php
 class Database{
    protected $connProduct = null;
    function __construct(){
         
        $this->connProduct = new mysqli("localhost","root","","termekek");
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