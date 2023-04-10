# 0.3.1

    - Kosár rendszer kiépítve
        - Mikor kiválasztunk egy elemelt (a boltabn rákattintunk) akkor átvisz minket egy másik oldalra ami azzal   kapcsolatban több információt jelenít meg
        - ez utánna a 'Kosárba' gombal beletudjik tenni a kosarunk hogy később meg tudjuk veni azt
        - A termékekről csak a termék idt mentjük és hogy belőle menyit szeretnénk venni
        - A következő struktúra alapján vannak mentve az adatok:

            {
                item: [
                    {
                        id: "6", ==> A termék ID-ja hogy tuduk azonosítani azt
                        quantity: "6" ==> menyit szeretnénk venni belőle
                    }
                ]
            }

        - Egyenlőre hibakezeés még csak arra van ha a kosár 'shopCart' tartalma "korruptálódik" ([object Object] lesz a shop cart értéke) akkor a kosár tartalmát teljesen kiüríti. Nincs a kosár tartalma külsőleg külön tárolva így annak elveszett tartalmát a felhasználó nem tudja viszaállítani 
        

