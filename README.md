# 0.3.3.2

    - Kosár rendszer átírva
        - Mostmár a $_SESSION['kart']-ban tárolódnak az adatok
        - Felépítési reszere hasonló mit a localstorag-ban
        Hozzáférés:
            $_SESSION['kart'][index]["item"];

            $_SESSION['kart'] --> A session neve amiben a kosár tartalma mentve van
            [index] --> A session melyik elemével fogunk dolgozni
            ['item'] / ['qunatity']
                - ['item'] --> A termék id-ja. Ez alapján lőjük be mégis milyen termék(ek) vannak a kosárban
                - ['quantity] --> Ha van termék akkor van menyiség. Ha még a terkék nincs a kosárban a felhasználó által megadott   menyiséggel tölti fel azt. Utánna meg ha többet szeretne hozzáadni akkor azt csak hozzá adja
        - A terméket az addItem() funckióval tesszük meg amit a SelectedProduct.class.php-ban találhatunk meg
                     
        

