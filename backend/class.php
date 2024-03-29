<?php
    require_once(__ROOT__.'\backend\sessionHandel.php');
    
    require_once(__ROOT__.'\backend\classes\database.class.php'); //Ebben az osztályan alakítjuk ki az adatbázissal való kommunikációt/kapcsolatot
    require_once(__ROOT__.'\backend\classes\userHandling.class.php'); $userClass = new UserHandling(); //A felhasználók információit itt tudjuk megtekentini egy nagy lista foemájában
    require_once(__ROOT__.'\backend\classes\productLoader.class.php'); $prodLoadClass = new ProducLoader(); //Ez az osztály tölti be a webshop-ra a terméketet
    require_once(__ROOT__.'\backend\classes\selectedProduct.class.php'); $seletedProdClass = new SelectedProduct(); //Ebben betöltjük a felhasználó által kiválasztott terméket ahol bővebb információt tud a felhasználó szerezni és akár kosárba tenni azt
    require_once(__ROOT__.'\backend\classes\warehouseSystem.class.php'); $warehouseClass = new WarehouseSystem(); //Itt tudunk az online bolt termékei között keresni, módosítani azok adatait, újat hozzáadni vagy törölni már létezőt
    require_once(__ROOT__.'\backend\classes\orderConformation.class.php'); $orderConfomationCLass = new OrderConformation();
    require_once(__ROOT__.'\backend\classes\orderHandling.class.php'); $orderHandlingClass = new OrderHandling(); //A rendelések információit itt tudjuk megtekentini egy nagy lista foemájában
