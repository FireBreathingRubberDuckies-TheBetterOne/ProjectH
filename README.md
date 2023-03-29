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


