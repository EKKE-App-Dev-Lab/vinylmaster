# Tesztelési jegyzőkönyv

## Adatok

- Tesztelő: Bauer András
- Teszteléshez használt fiók: NINCS

## Környezet

- Operációs rendszer: Windows 11 Home - 22H2 verzió (64 bit) 
- Böngésző: Google Chrome Verzió: 120.0.6099.225 (00 bit)

## Tesztesetek:

| Azonosító | Teszt leírása | Elvárt viselkedés | Eredmény |
|-----------|---------------|-------------------|----------|
| TEST1_01100 | A weboldal Kapcsolat megnyitása | A felület legyen elérhető | OK  |
| TEST1_01100 | A weboldal Kapcsolat oldal megnyitása | A felület legyen elérhető és reszponzív | OK |
| TEST1_01101 | A weboldal Kapcsolat oldal tetején Menüsor | A menüsor megjelenik | OK |
| TEST1_01105 | A weboldal Kapcsolat oldal Itt találhatsz meg minket szekció | Google maps térkép megjelenik a cég címével | OK |
| TEST1_01106 | A weboldal Kapcsolat oldal Kapcsolatfelvétel űrlap szekció |A kapcsolatfelvételi szekcióban minden szükséges mező (név, email, telefon, megrendelőszám, üzenet, küldés gomb stb.) megjelenik | OK |
| TEST1_01107 | A weboldal Kapcsolat oldal Kapcsolatfelvétel űrlap adatok helyes megadása | Küldés gombra kattintva üzenet küldés a beállított e-mail címre | HIBA: Elküldve üzenet nem jelenik meg. Hibajegy: BUG005 |
| TEST1_01108 | A weboldal Kapcsolat oldal Kapcsolatfelvétel űrlap adatok helytelen megadása | Hibaüzenet, javítás kérése a megfelelő mező adatainak | HIBA: Helytelen név megadása esetén nincs hibaüzenet. Hibajegy: BUG006  |
| TEST1_01109 | A weboldal Kapcsolat oldal Hírlevél szekció helyes e-mail cím megadása | Feliratkozom gombra kattintás esetén hozzáadás az adatbázishoz és megerősítő üzenet a képernyőre sikeres feliratkozásról | HIBA: Feliratkozás sikertelen, hibaüzenet. Hibajegy: BUG007 |
| TEST1_01110 | A weboldal Kapcsolat oldal Hírlevél szekció helytelen e-mail cím megadása | Hibaüzenet a Feliratkozom gombra kattintás esetén | HIBA: Megfelelő hibaüzenet hiányzik. Hibajegy: BUG008 |
| TEST1_01111 | A weboldal Kapcsolat oldal Lábjegyzet szekció megjelenítés | Cégnév, címadatok, elérhetőségek látszódnak | OK |
| TEST1_01112 | A weboldal Kapcsolat oldal Lábjegyzet Adatkezelési tájékoztató és ÁSZF | Kattintásra a dokumentumok megnyílnak a böngészőben | OK |