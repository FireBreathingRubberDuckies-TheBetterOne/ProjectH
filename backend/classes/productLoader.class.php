<?php
class ProducLoader extends database{
    function loader($lll){
        $sql = null;
        if($lll==null){
            $sql = "SELECT * FROM `termekek2` WHERE 1";
        }
        else{
            $sql = "SELECT * FROM `termekek2` WHERE `faj` = '$lll'";
        }
        $teszt1 = 0;

        $result = $this->connProduct->query($sql);
        $product = "<div class=\"container\"><div class=\"row\">";
        // $tt = null;
        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
                if($teszt1 == 3){
                    $product .= "
                    <a href=\"http://localhost/ProjectH/view/product.php?idTermek=$row[termid]\" class=\"col-sm-12 col-md-6 col-lg-3 igen m-1\"><div>$row[nev]</div></a>
                    </div><div class=\"row\">";
                    $teszt1 = 0;
                    // $tt = $row['nev'];
                    }
                else{
                    $product .= "<a href=\"http://localhost/ProjectH/view/product.php?idTermek=$row[termid]\" class=\"col-sm-12 col-md-6 col-lg-3 igen m-1\"><div>$row[nev]</div></a>";
                    // $tt = $row['nev'];
                    $teszt1++;
                }
            }
             $product .= "</div>";
             return $product;
        }
    }
}