<?php
class ProducLoader extends database{
    function loader($lll){
        $sql = null;
        if($lll==null){
            $sql = "SELECT * FROM `termekek` WHERE 1";
        }
        else{
            $sql = "SELECT * FROM `termekek` WHERE `faj` = '$lll'";
        }
        $teszt1 = 0;

        $result = $this->connProduct->query($sql);
        $product = "<div class=\"container\"><div class=\"row\">";
        // $tt = null;
        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){ 
                if($teszt1 == 3){
                    if($row["kep"]==null)
                    {
                        $product .= "
                        <a href=\"https://localhost/ProjectH/view/product.php?idTermek=$row[isokod]\" class=\"col-sm-12 col-md-6 col-lg-3 igen m-1\"><div><img src=\"../pictures/alap.jpg\" class=\"col-sm-12 col-md-6 col-lg-3 \" alt=\"$row[termnev]\">$row[termnev]</div></a>
                        </div><div class=\"row\">";
                    }
                    else
                    {

                    
                    $product .= "
                    <a href=\"https://localhost/ProjectH/view/product.php?idTermek=$row[isokod]\" class=\"col-sm-12 col-md-6 col-lg-3 igen m-1\"><div><img src=\"../pictures/$row[kep]\" class=\"col-sm-12 col-md-6 col-lg-3 \" alt=\"$row[termnev]\">$row[termnev]</div></a>
                    </div><div class=\"row\">";
                    }
                    $teszt1 = 0;
                    // $tt = $row['nev'];
                    }
                else{
                    if($row["kep"]==null)
                    {
                        $product .= "
                        <a href=\"https://localhost/ProjectH/view/product.php?idTermek=$row[isokod]\" class=\"col-sm-12 col-md-6 col-lg-3 igen m-1\"><div><img src=\"../pictures/alap.jpg\" class=\"col-sm-12 col-md-6 col-lg-3 \" alt=\"$row[termnev]\">$row[termnev]</div></a>
                        </div><div class=\"row\">";
                    }
                    else
                    {

                    
                    $product .= "
                    <a href=\"https://localhost/ProjectH/view/product.php?idTermek=$row[isokod]\" class=\"col-sm-12 col-md-6 col-lg-3 igen m-1\"><div><img src=\"../pictures/$row[kep]\"class=\"col-sm-12 col-md-6 col-lg-3 \" alt=\"$row[termnev]\">$row[termnev]</div></a>
                    </div><div class=\"row\">";
                    }
                    
                    // $tt = $row['nev'];
                    $teszt1++;
                }
            }
             $product .= "</div>";
             return $product;
        }
    }
}