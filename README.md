# 1.2.0.0

    - index oldalon kettő új megjelnés
        - $warehouseClass->newOrder(): lekéri az adatbázisból hogy az elmult    héten került be új adat az adtbázisba.
        - $prodLoadClass->loader(false): Csak azokat az iteemekt írja ki amikől vagy kevesebb mint 01 db-van vagy 0 darab van

    - $prodLoadClass->loader() változások
        - mostmár a meghívás során vár egy értéket: igaz hamis
        - Igaz érték: a katalógus fülön használjuk. Ha igaz értékkel hívjuk meg a fügvényt akkor minden elemet ami szerepel az adatbázisban
        - Hamis érték: az index oldalon használjuk. Ha hamis értékkel hívjuk meg akkor csak azokat írja ki ha 10 vagy 0 darba van raktráon.
    

