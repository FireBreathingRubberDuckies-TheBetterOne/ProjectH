# 0.4.1.1

    - Bejelentkező fül elkészült
    - Az erdeti kód ami a bejelentkezést tette lehetővé teljesen át lett írva mysqli-re
        - Ennek redeménye képp ennek a résznek az adatbázis kezelésével kapcsolatos feladatokat a userHandling.class.php-ba hejetem át
        - A felhasználó név string-kén van elmentve az adatbázisban viszont a jelszvavak bináris(80) formában vannak mentve így azokat vissza kellett fondítani hogy értelmezhetők legyenek 
    - A menü sávban a Bejelentkezés gomb le lett cserélve a Logout gombra

    - A session-ök meghívására a backend mappában létrelett hozva a sessionHandel.php
        - Ezene belül is nézzük meg hogy a felhasználó be van e jelentkezve
        - Ennek a filenak a meghívása a class.php-ban található meg

    - Mikor belépünk az oldalra mostmár a akkor egy bejelentkező fül fogad minket.
    - Miután bejelentkeztünk egy már létező felhasználóval akkor hozzáférünk az oldal teljes tartalmához



 
                     
        

