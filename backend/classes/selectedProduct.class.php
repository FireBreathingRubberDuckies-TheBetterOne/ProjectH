<?php
class SelectedProduct extends Database
{

    function productLoader($termekID)
    {
        if ($termekID==NULL)
        {
            return;
        }
        
        $sql = null;
        $sql = "SELECT * FROM `termekek` WHERE `isokod` = '$termekID'";
        $result = $this->connProduct->query($sql);
        $row = $result->fetch_assoc();

        file_put_contents(__ROOT__ . '/backend/tempProductData.json', json_encode($row), FILE_USE_INCLUDE_PATH);
         //echo __ROOT__;
        var_dump($row);
        $pdTable = "
        <div id=\"productShowcase\">
            <div class=\"container\">
            <div class=\"row\">
             <div class=\"col-6\">
             <div id=\"productShowcaseImage\" class=\"d-flex justify-content-center\">
                <div  class='h-100'><img src=\"".$this->properPicture($row['kep'])."\"></div>
            </div> 
            </div>  
            <div class=\"col-6\">
            <div id=\"productShowcaseInfo\">
            <form action=\"http://localhost/ProjectH/backend/cartContent.php\" method=\"post\">
            <ul>
                                    <li id=\"space\"></li>
                                    <li class=\"listItem\" name=\"isoCode\">$row[isokod]</li>
                                    <li id=\"space\"></li>
                                    <li class=\"listItem\" name=\"productName\">$row[termnev]</li>
                                    <li id=\"space\"></li>
                                    <li class=\"listItem\" name=\"productPrice\">$row[ar] Ft</li>
                                    <li id=\"space\"></li>
                                        <button type=\"submit\" class=\"proSub\">Kosárba</button>
                                        <input type=\"number\" min=\"1\" max=\"99\" value=\"1\" id=\"itemQuantity\" name=\"itemQuantity\">
                                    </ul>
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
        </div>
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
            return $img."jpg";
        }
    }
}
