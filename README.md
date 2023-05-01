<<<<<<< HEAD
# 0.3.3.2

    - Kosár rendszer átírva
        - Mostmár a $_SESSION['kart']-ban tárolódnak az adatok
        - Felépítési reszere hasonló mit a localstorag-ban
        Hozzáférés:
            $_SESSION['kart'][index]["item"];
=======
# 0.3.2.1

    - A merge Tóth Norbi branche-vel megtörtént
    - Teljes átrendezés és organizálás a backend mappában
        - Mostbár az database.php -> database.class.php lett és csak az adatbázi létrehozás és bezárása található meg benne.
        - A 'classes' mappában olyan php filok találhatók amikben csak oszályok vannak elszeparálva egymástól 
        - A 'classes' mappában minden osztály (eddig) örökölte a database.class.php tulajdunságt így nem kell minden osztálynak külön SQL kérés indítania
            - A mostani változatban jelenleg mindegyik osztyál a 'classes' mappában minden oldalon be van hívva fügetle attól hogy van e szükség e rá    vagy se 
        - Mostmár midegyik oszály egy php állományból hívodik meg a class.php file-ból.
        - Az osztályok mostmár a majdnem végleges adatbázissal nagyából működnek
            * Mikor ez a verzió felkerül az adatbázivan amit Norbi biztosított még adat nem volt található így a tesztelés még nem hajtódott végre *  
>>>>>>> origin/Norbi

            $_SESSION['kart'] --> A session neve amiben a kosár tartalma mentve van
            [index] --> A session melyik elemével fogunk dolgozni
            ['item'] / ['qunatity']
                - ['item'] --> A termék id-ja. Ez alapján lőjük be mégis milyen termék(ek) vannak a kosárban
                - ['quantity] --> Ha van termék akkor van menyiség. Ha még a terkék nincs a kosárban a felhasználó által megadott   menyiséggel tölti fel azt. Utánna meg ha többet szeretne hozzáadni akkor azt csak hozzá adja
        - A terméket az addItem() funckióval tesszük meg amit a SelectedProduct.class.php-ban találhatunk meg
                     
        

