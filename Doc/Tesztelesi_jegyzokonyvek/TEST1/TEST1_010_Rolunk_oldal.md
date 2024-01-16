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
| TEST1_01000 | A weboldal Rólunk oldal megnyitása | A felület legyen elérhető és reszponzív | OK |
| TEST1_01001 | A weboldal Rólunk oldal tetején Menüsor | A menüsor megjelenik | OK |
| TEST1_01002 | A weboldal Rólunk oldal Cégtulajdonos szekció | Fotó, bemutatkozás, aláírás megjelenik | OK |
| TEST1_01003 | A weboldal Rólunk oldal Kitüntetések szekció | Legutóbbi kitüntetések évszámmal, leírással megjelenik | OK |
| TEST1_01004 | A weboldal Rólunk oldal Csapatunk szekció | Csapat tagjainak fotói, neve, beosztása, mottója és ikonok közösségi oldalaikhoz megjelenik | OK |
| TEST1_01005 | A weboldal Rólunk oldal Itt találhatsz meg minket szekció | Google maps térkép megjelenik a cég címével | OK |
| TEST1_01006 | A weboldal Rólunk oldal Kapcsolatfelvétel űrlap szekció | Űrlap megfelelően megjelenik | OK |
| TEST1_01007 | A weboldal Rólunk oldal Kapcsolatfelvétel űrlap adatok helyes megadása | Küldés gombra kattintva üzenet küldés a beállított e-mail címre | HIBA: Elküldve üzenet nem jelenik meg. Hibajegy: BUG003 |
| TEST1_01008 | A weboldal Rólunk oldal Kapcsolatfelvétel űrlap adatok helytelen megadása | Hibaüzenet, javítás kérése a megfelelő mező adatainak | HIBA: Helytelen név megadása esetén nincs hibaüzenet. Hibajegy: BUG004 |
| TEST1_01009 | A weboldal Rólunk oldal Hírlevél szekció helyes e-mail cím megadása | Feliratkozom gombra kattintás esetén megerősítő üzenet a képernyőre sikeres feliratkozásról | OK |
| TEST1_01010 | A weboldal Rólunk oldal Hírlevél szekció helytelen e-mail cím megadása | OK |
| TEST1_01011 | A weboldal Rólunk oldal Lábjegyzet szekció megjelenítés | Cégnév, címadatok, elérhetőségek látszódnak | OK |
| TEST1_01012 | A weboldal Rólunk oldal Lábjegyzet Adatkezelési tájékoztató és ÁSZF | Kattintásra a dokumentumok megnyílnak a böngészőben | OK |