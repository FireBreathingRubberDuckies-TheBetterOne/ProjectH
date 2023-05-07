<?php
class SelectedProduct extends Database
{

    function productLoader($termekID)
    {
        if ($termekID==NULL)
        {
            return "<div class=\"d-flex min-vh-100 justify-content-center\" >
            <div class=\"mx-auto my-auto\" id=\"confirmWindow\">
                <h3>Hibatörtént a betöltés fojamán!</h3>
                <a class=\"m-auto\" href='http://localhost/ProjectH/view/shop.php'><button>Vissza</button></a>
            </div>
          </div> ";
        }
        $sql = null;
        $sql = "SELECT * FROM `termekek` JOIN `forgalmazo` WHERE `isokod` = '$termekID'";
        $result = $this->connProduct->query($sql);
        $row = $result->fetch_assoc();

        file_put_contents(__ROOT__ . '/backend/tempProductData.json', json_encode($row), FILE_USE_INCLUDE_PATH);
        $pdTable = "
        <div class=\"d-flex min-vh-100 justify-content-center\">
       s <div id=\"productShowcase\"  >
                            <div class=\"container\">
                                <div class=\"row\">
                                    <div class=\"col-lg-6 col-md-12\">
                                        <div id=\"productShowcaseImage\" class=\"d-flex justify-content-center\">
                                        <div class=' m-auto'><img src=\"".$this->properPicture($row['kep'])."\"></div>
                                    </div> 
                            </div>  
                            <div class=\"col-lg-6 col-md-12 d-flex justify-content-center\">
                                <div id=\"productShowcaseInfo\">
                                    <form action=\"http://localhost/ProjectH/backend/cartContent.php\" method=\"post\">
                                        <div class=\"listItem\">
                                            <div name=\"isoCode\">ISO kód: $row[isokod]</div>
                                            <div name=\"productName\">$row[termnev]</div>
                                            <div name=\"productPrice\">Nettó ár: $row[ar] Ft</div>
                                            <div name=\"bruttoAr\">Bruttó ár: ".$row['ar']*1.27." Ft</div>
                                            <div name=\"productCompany\">Forgamlmazó: $row[forgnev]</div>
                                        </div>
                                        <div id=\"putIn\">
                                                <button type=\"submit\" class=\"proSub\">Kosárba</button>
                                                <input type=\"number\" min=\"1\" max=\"99\" value=\"1\" id=\"itemQuantity\" name=\"itemQuantity\">
                                                <lable for=\"itemQuantity\">Darab</lable>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        <div>
                        <div id=\"productShowcaseDescription\">
                            <p>$row[leiras]</p>
                        </div>
                    </div>
                </div>
            </div>
        </div></div>
        ";
        return $pdTable;
    }
    function addItem($itemId,$itemQuan){
        for($i = 0; $i < count($_SESSION['kart']);$i++){
            if($_SESSION['kart'][$i]['item']==$itemId){
                $_SESSION['kart'][$i]['quantity']=$_SESSION['kart'][$i]['quantity']+$itemQuan;
                return;
            }
        }
        $obj = array(
            "item"=>$itemId,
            "quantity"=>$itemQuan
        );
        array_push($_SESSION['kart'], $obj);
    }
    function properPicture($img){
        if($img==null){
            return "http://localhost/ProjectH/pictures/alap.jpg";
        }
        else{
            return "http://localhost/ProjectH/pictures/".$img.".jpg";
        }
    }
}
