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
<<<<<<< HEAD
<<<<<<< HEAD
                    <a href=\"https://localhost/ProjectH/view/product.php?idTermek=$row[isokod]\" class=\"col-sm-12 col-md-6 col-lg-3 igen m-1\"><div>$row[termnev]</div></a>
=======
                    <a href=\"http://localhost/ProjectH/view/product.php?idTermek=$row[termid]\" class=\"col-sm-12 col-md-6 col-lg-3 igen m-1\"><div>$row[nev]</div></a>
>>>>>>> origin/Norbi
=======
                    <a href=\"https://localhost/ProjectH/view/product.php?idTermek=$row[isokod]\" class=\"col-sm-12 col-md-6 col-lg-3 igen m-1\"><div><img src=\"../pictures/$row[kep]\" class=\"col-sm-12 col-md-6 col-lg-3 \" alt=\"$row[termnev]\">$row[termnev]</div></a>
>>>>>>> 19ccd4ab159201f7bd06455c05f9a5c20d371880
                    </div><div class=\"row\">";
                    }
                    $teszt1 = 0;
                    // $tt = $row['nev'];
                    }
                else{
<<<<<<< HEAD
<<<<<<< HEAD
                    $product .= "<a href=\"https://localhost/ProjectH/view/product.php?idTermek=$row[isokod]\" class=\"col-sm-12 col-md-6 col-lg-3 igen m-1\"><div>$row[termnev]</div></a>";
=======
                    $product .= "<a href=\"http://localhost/ProjectH/view/product.php?idTermek=$row[termid]\" class=\"col-sm-12 col-md-6 col-lg-3 igen m-1\"><div>$row[nev]</div></a>";
>>>>>>> origin/Norbi
=======
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
                    
>>>>>>> 19ccd4ab159201f7bd06455c05f9a5c20d371880
                    // $tt = $row['nev'];
                    $teszt1++;
                }
            }
             $product .= "</div>";
             return $product;
        }
    }
}