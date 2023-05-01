<?php
 class Database{
    protected $connProduct = null;
<<<<<<< HEAD
    function __construct(){
         
        $this->connProduct = new mysqli("localhost","root","","termekek");
        if($this->connProduct->connect_error ){
=======
    protected $connUser = null;
    function __construct(){
        $this->connProduct = new mysqli("localhost", "root","","termekek");
        $this->connUser = new mysqli("localhost", "root","","felhasznalok");
        if($this->connProduct->connect_error ||$this->connUser->connect_error ){
>>>>>>> origin/Norbi
            echo "<script>alarm(\"A kapcsolat nem volt sikerese!\");</script>";
            die();
        }
    }
    function __destruct(){
        $this->connProduct->close();
<<<<<<< HEAD
=======
        $this->connUser->close();
>>>>>>> origin/Norbi
    }
}
?>