# Rendszerterv

## 1. Rendszer célja

Egy olyan weboldal létrehozása, ahol az eladó bemutatkozhat, illetve az eladó bakelit lemezeit átlátható, letisztult formában értékesítheti a vevők számára, valamint lemezkészítési lehetőséget is felkínálhat.

Az oldal használatához egy regisztrált és e-mail címmel megerősített felhasználói fiók szükséges. Az űrlapon megadott adatokkal tud a felhasználó később bejelentkezni, hogy vásárlást tudjon indítani, valamint elfelejtett jelszó esetén jelszót helyreállítani. A regisztrációnál számítógépes robot szűrés is történik reCapcha megerősítéssel.

Kétféle felhasználói fiók van: 
- a megrendelőnk mint super user hozzáfér mindenhez, az adatbázishoz is és 
- a vevői fiók akik megrendelést is tudnak leadni

A sima látogatók csak böngészni tudnak az oldalon vagy kapcsolatba lépni az eladóval, de megrendelést nem tudnak leadni.

A lemezek valamint a felhasználók és a megrendelések egy adatbázisban vannak tárolva, ehhez csak megrendelőnknek van hozzáférése, hogy új termékeket tudjon felvinni, módosítani, törölni közvetlenül az adatbázisban is és a szükségtelen felhasználókat is törölni tudja. Ugyanakkor megrendelőnk jogosultságával a weboldalon keresztül is tud termékeket felvinni/módosítani/törölni ami közvetlenül az adatbázisba íródik.

## 2. Projekt terv

A projekt egy weboldal ami PHP alapokon nyugszik, de használ HTML, CSS, Bootstrap, JavaScript elemeket, valamint MySQL adatbázist a felhasználók, termékek és vásárlási adatok rögzítéséhez. Négy fejlesztő dolgozik egyszerre a megvalósításon, ezért a konfliktusok kezelésére projekt menedzsment és kollaborációs eszközöket használunk. 

A feladatok nyomonkövetésére a Trello-ban létrehozott https://trello.com/b/NcWPd94d/projectx felületet használjuk.

A folyamatos kommunikációhoz és a projekt megbeszélésekhez valamint az azonnali problémamegoldáshoz a Discord-on létrehozott projekt szervert használjuk. Az itt rendelkezésre álló eszközöket, úgymint chat, fájlmegosztás, képernyőmegosztás és telefon/videókonferencia hívás extenzíven támogatják a feladat megvalósítását.

A kódon végzett változtatásokat és az esetleges párhuzamosan végzett módosítások konfliktusait a GitHub használatával orvosoljuk és itt követjük nyomon a kódfejlesztés előrehaladását a https://github.com/EKKE-App-Dev-Lab/vinylmaster/branches oldalon.

## 3. Üzleti folyamatok modellje




## 4. Követelmények

Egy PHP-t futtatni képes webszerver MySQL adatbázissal, valamint e-mail küldéssel a regisztrációhoz, egy modern böngésző felület.

## 5. Funkcionális terv

Menü felépítés:
Logo
- Kezdőoldal
- Termékek
- Készíts saját bakelitet
- Rólunk
- Kapcsolatfelvétel

Ikonok:
- Kosár
- Felhasználó


## 6. Fizikai környezet
Szerver oldalon egy Apache-ot, PHP-t és MySQL adatbázist futtatni képes operációs rendszer és az ehhez megfelelő hardverrel ellátott eszköz.

Kliens oldalon egy modern böngészőt futtatni képes operációs rendszerre van szükség (és ettől függően egy megfelelő hardverrel ellátott eszközre). Az oldal struktúrájáért a HTML, a megjelenítésért a CSS valamint Bootstrap és az interakciókért a JavaScript felelős.

## 7. Absztrakt domain modell



## 8. Architekturális terv

A rendszer folyamatosan bővíthető az eladó által. Új termékeket vihet fel, valamint módosíthatja és törölheti a meglévőket.

Biztonsági funkciók közé tartozik, hogy van adminisztrátori fiók. Az adminisztrátor minden regisztrált felhasználó adatát láthatja és kezelheti, kivéve a jelszót, mivel az titkosítva van eltárolva. Minden felhasználó csak a saját adatait módosíthatja.

## 9. Adatbázis terv

A Vinylmaster webshop által hazsnált MySQL adatbázis, a vinylmasterdb, egy olyan adatbázis-rendszer, amelyet úgy
terveztünk, hogy kezelje az online hanglemezbolt adatait. A struktúra több táblát tartalmaz, mint például products,
categories, product_category, types, product_type, user, cart, cartitem, userorder, orderitem, és transaction.

Ebben a rendszerben a products tábla tárolja az eladásra kínált hanglemezek adatait, beleértve az előadó nevét, az album
címét, leírását, állapotát, kategóriáját, árát, és a borító képét. A categories és types táblák különböző kategóriákat
és típusokat definiálnak, amelyeket aztán a product_category és product_type táblákon keresztül kapcsolnak össze a
termékekkel.

A user tábla a felhasználók adatait tárolja, beleértve a felhasználónevet, jelszót, nevet, e-mail címet, címet,
telefonszámot, és további információkat. A vásárlási folyamatot a cart, cartitem, userorder, orderitem, és transaction
táblák kezelik, amelyek a kosárba helyezett termékeket, a megrendeléseket és a tranzakciókat követik nyomon.

Az alábbi ábra mutatja az adatbázis felépítését:

![img.png](adatbazis.png)


## 10. Implementációs terv



## 11. Tesztterv



## 12. Telepítési terv



## 13. Karbantartási terv
