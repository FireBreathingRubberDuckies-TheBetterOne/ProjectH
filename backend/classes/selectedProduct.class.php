<?php
class SelectedProduct extends Database{

    function productLoader($termekID){
        $sql = null;
        $sql = "SELECT * FROM `termekek` WHERE `isokod` = '$termekID'";
        $result = $this->connProduct->query($sql);
        $row = $result->fetch_assoc();

        file_put_contents(__ROOT__.'/backend/tempProductData.json', json_encode($row), FILE_USE_INCLUDE_PATH);

        $pdTable = "
        <div id=\"productShowcase\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-6\">
                        <div id=\"productShowcaseImage\">
                            <p>$row[termekid]</p>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div id=\"productShowcaseInfo\">
                            <ul>
                                <li>$row[termnev]</li>
                                <li>$row[ar] Ft</li>
                                <button id=\"proSub\">Kosárba</button>
                                <input type=\"number\" min=\"1\" max=\"99\" value=\"1\" id=\"itemQuantity\">
                            </ul>
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
     
}
    
   
?>