<?php
class SelectedProduct extends Database{

    function productLoader($termekID){
        $sql = null;
        $sql = "SELECT * FROM `users` WHERE `ID` = '$termekID'";
        $result = $this->connProduct->query($sql);
        $row = $result->fetch_assoc();

        file_put_contents(__ROOT__.'/backend/tempProductData.json', json_encode($row), FILE_USE_INCLUDE_PATH);

        $pdTable = "
        <div id=\"productShowcase\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-6\">
                        <div id=\"productShowcaseImage\">
                            <p>$row[ID]</p>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div id=\"productShowcaseInfo\">
                            <ul>
                                <li>$row[nev]</li>
                                <li>$row[faj]</li>
                                <button id=\"proSub\">Kosárba</button>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <div id=\"productShowcaseDescription\">
                            <p>$row[szoveg]</p>
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