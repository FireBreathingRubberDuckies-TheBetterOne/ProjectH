<?php
 class Database{
    protected $connProduct = null;
    protected $connUser = null;
    function __construct(){
        $this->connProduct = new mysqli("localhost", "root","","termekek");
        $this->connUser = new mysqli("localhost", "root","","felhasznalok");
        if($this->connProduct->connect_error ||$this->connUser->connect_error ){
            echo "<script>alarm(\"A kapcsolat nem volt sikerese!\");</script>";
            die();
        }
    }
    function __destruct(){
        $this->connProduct->close();
        $this->connUser->close();
    }
}
?>