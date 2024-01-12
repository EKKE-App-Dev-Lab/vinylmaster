# Követelményspecifikáció

## Bevezetés

Napjainkban, amikor minden a digitális térbe költözik - reklámok, zenék, filmek, - a tartalom korlátlanul elérhető,
felnőtt egy olyan generáció, akiknek gyerekkorukban a bakelit lemez is már régmúltnak hatott a kazettás magnó, a
televízió és a rádió világa mellett. Ugyanakkor mivel gyerekkoruk egy meghatározó része, manapság újra aranykorát éli a
régi bakelit lemezek kereskedelme. Ezek főként hagyatékból vagy lomtalanításkor fellelt darabok, vagy Facebook
Marketplace-en, eBay-en meghirdetve, köztük számos ritkasággal, aláírással ellátott relikviával.

Mindemellett ugyanakkor vadonatúj kiadások is ismét megjelennek, hogy kielégítsék a vásárlók nosztalgia igényét, vagy
azokét, akik szívéhez a bakelitek utánozhatatlan hangzásvilága áll közelebb a széles körben elérhető digitálisan
tömörített változatokhoz képest.

## Jelenlegi helyzet

Megrendelőnk egy jelentősebb gyűjteményt halmozott fel az évtizedek során főleg a rokonságban megmaradt darabokból, de emellett hobbijává is vált, hogy hagyatékokból vagy internetről is összegyűjtsön ritkább példányokat. Ezen gyűjtés során született meg a felismerés, hogy nincs egyedül ezzel a hobbinak indult tevékenységgel és tekintve, hogy néhány Facebook csoportot leszámítva nincs erre specializálódott felület, ahol a vevők átláthatóan tudnának keresni. Jelenleg az idő nagy részét az utánajárás, kutatás és böngészés, valamint az utólagos minőség-ellenőrzés teszi ki.

## Vágyálomrendszer

Egy olyan bakelitekre specializálódott modern, de mégis a régi korszakot idéző felület létrehozása, ahol az eladók termékei és a vevők egymásra találhatnak, az elérhető termékek ellenőrzött minőségűek, a relikviák bizonyíthatóan eredetiek.
A minőséget a vevők a lemezről készült digitális változatba való belehallgatással ellenőrizni tudják és az eladó garanciája mellett tudnak vásárolni a felületen.
Potenciális eladók pedig kapcsolatba tudnak lépni a céggel és felajánlani hagyatékból megmaradt vagy egyéb gyűjteményüket megrendelőnknek.

## Megrendelői cél:

1. Modern, könnyen átlátható, kereshető vásárlói felület
2. Vásárlók regisztrálása az elérés javításához, marketinghez
3. A megrendelőnk számára minél egyszerűbb fizetési mód bevezetése ahol alacsonyak a költségek, hogy versenyképes árakat
   adhasson meg, nagyobb hasznot érhessen el.

## Megrendelői követelmény:

1. Bemutató oldal, ahol vevők meggyőződhetnek az eladó megbízhatóságáról, láthatják a korábbi értékeléseket, vevői
   visszajelzéseket.
2. A lemezek könnyen listázhatóak, kereshetőek legyenek.
3. A stílus harmonizáljon a régi idők hangulatával.
4. Levelezőlista és hírlevél kiküldés a regisztrált vásárlóknak.

## Funkcionális követelmények
Weboldal létrehozása hozzá kapcsolódó adatbázissal, bemutatkozás, regisztráció, belépés
1. Felhasználói regisztráció (admin/eladó/vásárló)
2. Vásárló regisztráció (felhasználónév, jelszó, e-mail cím elég)
3. Terméklistázás
    1. kategória menedzsment (előadó, cím, zenei stílus, formátum, állapot)
    2. lemezborító megjelenítés
    3. rendezési lehetőség (előadó, cím, ár)
    4. oldalanként változtatható mennyiségi megjelenítési lehetőség (10/25/mind) és lapozás
4. Bejelentkezés (felhasználói név, jelszó, elfelejtett jelszó újraküldése a regisztrált e-mail címre)
5. Vásárói kosár (hozzáadás/módosítás/törlés)
6. Checkout (itt kell megadni a megrendelő adatait, magánszemély vagy cég, cím adatok, szállítási cím adatok ugyanaz vagy másik)
7. Megrendelés visszaigazolása: e-mail generálás vevőnek a fizetési instrukciókkal
