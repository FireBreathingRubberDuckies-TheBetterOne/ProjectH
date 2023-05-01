# 0.4.2.2

    - orderData.php - meghívja a orderConformation.class.php elemeit a megfelelő sorrendeben
        - miután a rendelés le lett adva a kosár ($_session['kart']) tartalmát autómatikusan menti majd törli 
    - orderConformation.class.php - Adatfeldolgozáséer felel, adatbázisba felfivi a kosár elemeit a megfeleő módon

    - A raktárban (termeksor.php) meglett oldva hogy az új elem hozzáadás gomb a lista tetején legyen

    - Ismert probléma: product.php-ban ha hozzáadunk egy terméket a kosárhoz akkor kijelentkeztet az oldal, DE ez csak egyszer fordul elő miután bejelentkezünk és addig nem fordul elő míg úja ki nem jelentekük és be

    - Kód rendezés(nem módosítás): - warehouse.class.php: A sok echot lecserélve egy string változóra mit vissza ad a termeksor() és termekker()



