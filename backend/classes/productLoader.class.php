<?php
class ProducLoader extends database{
    function loader(){
        $sql = "SELECT * FROM `termekek` WHERE 1";

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
                          <div class=\"d-flex justify-content-between align-items-center\">
                            <div class=\"btn-group\">
                              <button type=\"button\" class=\"btn btn-sm\">Bővebben</button>
                            </div>
                            <span class=\"price\">$row[ar] FT</span>
                          </div>
                          <span id=\"outOfStock\">".$this->outOfStcok($row['mennyiseg'])."</span>
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
            return "http://localhost/ProjectH/pictures/".$img.".jpg";
        }
    }
    function outOfStcok($meny){
      if($meny==0){
        return "Nincs rakárton!";
      }
      else if($meny<10){
          return $meny." van már csak raktáron!";
      }
      else{
        return;
      }
    }
}