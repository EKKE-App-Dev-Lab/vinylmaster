# Tesztelési jegyzőkönyv

## Adatok

- Tesztelő: __NEV__
- Teszteléshez használt fiók: __FELHASZNALONEV__

## Környezet

- Operációs rendszer: __OS__ __OSVER__ (00 bit) 
- Böngésző: __BONGESZO__ __BONGVER__ (00 bit)

## Tesztesetek:

| Azonosító | Teszt leírása | Elvárt viselkedés | Eredmény |
|-----------|---------------|-------------------|----------|
| TEST1_00100 | A weboldal Kezdőoldal megnyitása | A weboldal sikeresen jelenjen meg |  |







| TEST1_00200 | A regisztrációs felület elérése | A felület legyen elérhető |  |
| TEST1_00201 | A regisztrációs felület kipróbálása helyes adatokkal | Sikeres regisztráció, megerősítő email kiküldése |  |
| TEST1_00202 | A regisztrációs felület kipróbálása helytelen adatokkal, Felhasználónév | Sikertelen regisztráció, hiba jelzése |  |
| TEST1_00203 | A regisztrációs felület kipróbálása helytelen adatokkal, Vezetéknév | Sikertelen regisztráció, hiba jelzése |  |
| TEST1_00204 | A regisztrációs felület kipróbálása helytelen adatokkal, Keresztnév | Sikertelen regisztráció, hiba jelzése |  |
| TEST1_00205 | A regisztrációs felület kipróbálása helytelen adatokkal, Email | Sikertelen regisztráció, hiba jelzése |  |
| TEST1_00206 | A regisztrációs felület kipróbálása helytelen adatokkal, Jelszó | Sikertelen regisztráció, hiba jelzése |  |
| TEST1_00207 | A regisztrációs felület kipróbálása helytelen adatokkal, Jelszó újra | Sikertelen regisztráció, hiba jelzése |  |
| TEST1_00208 | A regisztrációs felület kipróbálása helytelen adatokkal, ReCaptcha | Sikertelen regisztráció, hiba jelzése |  |
| TEST1_00209 | A regisztrációs felület kipróbálása létező felhasználói adatokkal | Sikertelen regisztráció, hiba jelzése |  |
| TEST1_00300 | A bejelentkező felület elérése | A felület legyen elérhető |  |
| TEST1_00301 | A bejelentkező felület kipróbálása helyes adatokkal | Sikeres bejelentkezés |  |
| TEST1_00302 | A bejelentkező felület kipróbálása helytelen adatokkal, Felhasználónév | Sikertelen bejelentkezés, hiba jelzése |  |
| TEST1_00303 | A bejelentkező felület kipróbálása helytelen adatokkal, Jelszó | Sikertelen bejelentkezés, hiba jelzése |  |
| TEST1_00304 | A bejelentkező felület kipróbálása nem létező felhasználói adatokkal | Sikertelen bejelentkezés, nem létező felhasználó jelzése |  |
| TEST1_00305 | A bejelentkező felületen, Elfelejtett jelszó kérelem | Új oldal megjelenítés ahol emailt kell megadni, sikeres email kiküldés új generált jelszóval |  |
| TEST1_00306 | A bejelentkező felületen, Ideiglenes jelszó generálás | Email kiküldés új jelszóval |  |
| TEST1_00307 | A bejelentkező felületen, Bejelentkezés újraküldött generált jelszóval | Email kiküldés új jelszóval |  |
| TEST1_00401 | A felhasználó admin felületen, Helyes jelszó változtatás | Sikeres jelszó változtatás |  |
| TEST1_00402 | A felhasználó admin felületen, Helytelen jelszó változtatás | Sikertelen jelszó változtatás |  |
| TEST1_00403 | A felhasználó admin felületen, Helyes vezetéknév változtatás | Sikeres jelszó változtatás |  |
| TEST1_00404 | A felhasználó admin felületen, Helytelen vezetéknév változtatás | Sikertelen jelszó változtatás |  |
| TEST1_00405 | A felhasználó admin felületen, Helyes keresztnév változtatás | Sikeres jelszó változtatás |  |
| TEST1_00406 | A felhasználó admin felületen, Helytelen keresztnév változtatás | Sikertelen jelszó változtatás |  |
| TEST1_00407 | A felhasználó admin felületen, Kijelentkezés | Sikeres kijelentkezés |  |
| TEST1_00500 | A weboldal Termékek megnyitása | A felület legyen elérhető |  |
| TEST1_00501 | A weboldal Termékek sorbarendezése | Terméklista sorrend változik és a címsorban is megjelenik a választott opció |  |
| TEST1_00502 | A weboldal Termékek kategória választás | Terméklista kínálat változik és a címsorban is megjelenik a választott opció |  |
| TEST1_00503 | A weboldal Termékek termékre kattintás | Termék részletei betöltődnek, valamint látszik a rendelhető mennyiség |  |
| TEST1_00600 | A weboldal Termék részleteknél Mennyiség változtatás | Mennyiség növelhető-csökkenthető |  |
| TEST1_00601 | A weboldal Termék részleteknél Kosárba gombra kattintás | Adott mennyiség a kosárba kerül, a jobb felső sarokban a kosár ikonnál látszik a kosárban lévő összmennyiség száma |  |
| TEST1_00602 | A weboldal Termék részleteknél Folytatás gombra kattintás | Visszatér az előző terméklista oldalra, a termék nem kerül a kosárba |  |
| TEST1_00700 | A felhasználói kosár megnyitása | A felület legyen elérhető |  |
| TEST1_00701 | A felhasználói kosár tartalma | Listázza ki a kosárba helyezett termékeket |  |
| TEST1_00702 | A felhasználói kosárból termék eltávolítása | Törlődik a termék a kosárból, a kosár ikonnál változik a kosárban lévő mennyiség |  |
| TEST1_00703 | A felhasználói kosár összesítő | Látszódik a részösszeg, a kiszállítás alapdíja valamint a fizetendő végösszeg |  |
| TEST1_00703 | A felhasználói kosár Pénztár | Rendelési összesítő oldal betöltődik |  |
| TEST1_00801 | A Rendelési összesítő Keresztnév helyes megadása | Nincs hiba, ha az összes adat helyes a Tovább a pénztárhoz gombra kattintva |  |
| TEST1_00802 | A Rendelési összesítő Vezetéknév helyes megadása | Nincs hiba, ha az összes adat helyes a Tovább a pénztárhoz gombra kattintva |  |
| TEST1_00803 | A Rendelési összesítő Cím helyes megadása | Nincs hiba, ha az összes adat helyes a Tovább a pénztárhoz gombra kattintva |  |
| TEST1_00804 | A Rendelési összesítő Irányítószám helyes megadása | Nincs hiba, ha az összes adat helyes a Tovább a pénztárhoz gombra kattintva |  |
| TEST1_00805 | A Rendelési összesítő Email helyes megadása | Nincs hiba, ha az összes adat helyes a Tovább a pénztárhoz gombra kattintva |  |
| TEST1_00806 | A Rendelési összesítő Fizetési mód választható | Nincs hiba, ha az összes adat helyes a Tovább a pénztárhoz gombra kattintva |  |
| TEST1_00807 | A Rendelési összesítő Kártyán szereplő név helyes megadása | Nincs hiba, ha az összes adat helyes a Tovább a pénztárhoz gombra kattintva |  |
| TEST1_00808 | A Rendelési összesítő Bankkártya szám helyes megadása | Nincs hiba, ha az összes adat helyes a Tovább a pénztárhoz gombra kattintva |  |
| TEST1_00809 | A Rendelési összesítő Lejárati dátum Hónap helyes megadása | Nincs hiba, ha az összes adat helyes a Tovább a pénztárhoz gombra kattintva |  |
| TEST1_00810 | A Rendelési összesítő Lejárati dátum Év helyes megadása | Nincs hiba, ha az összes adat helyes a Tovább a pénztárhoz gombra kattintva |  |
| TEST1_00811 | A Rendelési összesítő Lejárati dátum CVV helyes megadása | Nincs hiba, ha az összes adat helyes a Tovább a pénztárhoz gombra kattintva |  |
| TEST1_00812 | A Rendelési összesítő Keresztnév helytelen megadása | Hiba a Tovább a pénztárhoz gombra kattintva |  |
| TEST1_00813 | A Rendelési összesítő Vezetéknév helytelen megadása | Hiba a Tovább a pénztárhoz gombra kattintva |  |
| TEST1_00814 | A Rendelési összesítő Cím helytelen megadása | Hiba a Tovább a pénztárhoz gombra kattintva |  |
| TEST1_00815 | A Rendelési összesítő Irányítószám helytelen megadása | Hiba a Tovább a pénztárhoz gombra kattintva |  |
| TEST1_00816 | A Rendelési összesítő Email helytelen megadása | Hiba a Tovább a pénztárhoz gombra kattintva |  |
| TEST1_00817 | A Rendelési összesítő Kártyán szereplő név helytelen megadása | Hiba a Tovább a pénztárhoz gombra kattintva |  |
| TEST1_00818 | A Rendelési összesítő Bankkártya szám helytelen megadása | Hiba a Tovább a pénztárhoz gombra kattintva |  |
| TEST1_00819 | A Rendelési összesítő Lejárati dátum Hónap helytelen megadása | Hiba a Tovább a pénztárhoz gombra kattintva |  |
| TEST1_00820 | A Rendelési összesítő Lejárati dátum Év helytelen megadása | Hiba a Tovább a pénztárhoz gombra kattintva |  |
| TEST1_00821 | A Rendelési összesítő Lejárati dátum CVV helytelen megadása | Hiba a Tovább a pénztárhoz gombra kattintva |  |
| TEST1_00822 | A Rendelési összesítő Kosár tételenkéni összesítés | A felsorolás, a tételenkénti teljes összegek valamint a Végösszeg helyes |  |
| TEST1_00900 | A weboldal Készíts saját bakelitet megnyitása | A felület legyen elérhető |  |







| TEST1_01000 | A weboldal Rólunk oldal megnyitása | A felület legyen elérhető és reszponzív |  |
| TEST1_01001 | A weboldal Rólunk oldal tetején Menüsor | A menüsor megjelenik |  |
| TEST1_01002 | A weboldal Rólunk oldal Cégtulajdonos szekció | Fotó, bemutatkozás, aláírás megjelenik |  |
| TEST1_01003 | A weboldal Rólunk oldal Kitüntetések szekció | Legutóbbi kitüntetések évszámmal, leírással megjelenik |  |
| TEST1_01004 | A weboldal Rólunk oldal Csapatunk szekció | Csapat tagjainak fotói, neve, beosztása, mottója és ikonok közösségi oldalaikhoz megjelenik |  |
| TEST1_01005 | A weboldal Rólunk oldal Itt találhatsz meg minket szekció | Google maps térkép megjelenik a cég címével |  |
| TEST1_01006 | A weboldal Rólunk oldal Kapcsolatfelvétel űrlap szekció | Űrlap megfelelően megjelenik |  |
| TEST1_01007 | A weboldal Rólunk oldal Kapcsolatfelvétel űrlap adatok helyes megadása | Küldés gombra kattintva üzenet küldés a beállított e-mail címre |  |
| TEST1_01008 | A weboldal Rólunk oldal Kapcsolatfelvétel űrlap adatok helytelen megadása | Hibaüzenet, javítás kérése a megfelelő mező adatainak |  |
| TEST1_01009 | A weboldal Rólunk oldal Hírlevél szekció helyes e-mail cím megadása | Feliratkozom gombra kattintás esetén hozzáadás az adatbázishoz és megerősítő üzenet a képernyőre sikeres feliratkozásról |  |
| TEST1_01010 | A weboldal Rólunk oldal Hírlevél szekció helytelen e-mail cím megadása | Hibaüzenet a Feliratkozom gombra kattintás esetén |  |
| TEST1_01011 | A weboldal Rólunk oldal Lábjegyzet szekció megjelenítés | Cégnév, címadatok, elérhetőségek látszódnak |  |
| TEST1_01012 | A weboldal Rólunk oldal Lábjegyzet Adatkezelési tájékoztató és ÁSZF | Kattintásra a dokumentumok megnyílnak a böngészőben |  |
| TEST1_01100 | A weboldal Kapcsolat megnyitása | A felület legyen elérhető |  |