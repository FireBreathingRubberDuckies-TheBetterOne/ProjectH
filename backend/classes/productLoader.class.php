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

        $result = $this->connProduct->query($sql);
        $product = " <div class=\"products\"><div class=\"container\"><div class=\"row card-deck\">";

        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){ 
              $product .= "
              <div class=\"col-sm-12 col-md-6 col-lg-3 mb-4\">
                <a href=\"http://localhost/ProjectH/view/product.php?idTermek=$row[isokod]\" >
                  <div class=\"card h-100 mb-3\">
                    <img src=\"".$this->properPicture($row['kep'])."\" class=\"card-img-top\" alt=\"Product 1\">
                      <div class=\"card-body\">
                        <h5 class=\"card-title py-1\">$row[termnev]</h5>
                          <div id=\"cardButton\" class=\"d-flex justify-content-between align-items-center\">
                            <span class=\"price\">$row[ar] FT</span>  
                            <div class=\"btn-group\">
                              <button type=\"button\" class=\"btn btn-sm\">Kosárba tesz.</button>
                            </div>
                            
                          </div>
                      </div>
                  </div>
                </a>
              </div>
           ";
            }
        }
        $product .= "</div></div></div>";
        return $product;
    }

    function properPicture($img){
        if($img==null){
            return "http://localhost/ProjectH/pictures/alap.jpg";
        }
        else{
            return $img."jpg";
        }
    }
}