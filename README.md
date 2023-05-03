# 1.1.0.0

    - sopingCart.php tartalmát átvittem a orderHandling.class.php-ban 
	    - ezt orderListing() néven lehet meghívni
    - termékek kilistázást átvittem orderHandling.class.php-ban
	    - itt semmi változás nem történt a kódban

    - a menüsávna a Rendelés fül felett mostmár kiírja hogy hány elem található a kosárban
        - EZ ajax-al lett megoldva
        - Ennek a Javascript-je style/scripts-ben található meg
        - Ezt a script-et a footer.php-ban hívja be minden oldalra

    - Márk css "beillesztése"
        - A termék megjelnítés és a bejelentkező fül(jelnleg még az sem működik rendesen) maradt meg.
        - A kódja nagy része használhatatlan a mostnai állaptukban így általam újra lesznek írva 
        
    - Footer kialakítása
    	- jelenleg csak place holder adatokkal van feltöltve.
	- Minden oldalon megjeleni a footer kivéve a bejelentkező fülön mive ott mincs rá szükség
# 1.1.1.0

    - orderHandling.class.php-ban termekker()-ből kikerült a Checkout gomb és külön át lett helyezve a shopingCart.php-ba

