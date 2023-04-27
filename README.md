# 0.4.2.1

    - warehouse.class.php meghívása/hivatkozása a class.php-ban $productsClass -> $warehouseClass
    - A checkout functoió és oldalai bekerültek a view/checout-ba


    - warehouse.class.php-ban a "termekekre" function nagyobb átalakításon ment végig
        - Mostmár 3 atribútom kell a meghíváshoz: $warehouseClass->termekker(true,true,true);
            - Az első atribútum: Ez határozza meg hogy a megejelnítés során a "törlés" gomb megjeleni vagy sem
            - A második atribútum: Ez határozza meg hogy a megejelnítés során a "checkout" gomb megjeleni vagy sem
            - A harmadik atribútum: Ez határozza meg hogy táblában+form-ban adja vissza az adtokat vagy csak szimpla tábla sorkként (<tr>)

    - orderData.php: a rendelés véglegesítése után ennek segítségével mentődnek az adatok az adatbázisba.(még változhat az adatmenyiség amit menteni fog)

