drop database if exists `vinylmasterdb`;
create database if not exists `vinylmasterdb`;
use `vinylmasterdb`;

CREATE TABLE `products`
(
    `productID` bigint(20)   NOT NULL AUTO_INCREMENT,
    `albumcim`  varchar(255) not null,
    `eloado`    varchar(255) not null,
    `leiras`    text         not null,
    `allapot`   varchar(255) not null,
    `kategoria` varchar(255) not null,
    `ar`        int          not null,
    `boritokep` varchar(255) null,
    PRIMARY KEY (`productID`)
);

INSERT INTO `products` (albumcim, eloado, leiras, allapot, kategoria, ar, boritokep)
VALUES ('A Love Supreme', 'John Coltrane', 'Spiritual jazz masterpiece', 'Új', 'Jazz', 8500, 'Assets\\images\\products\\alovesupreme.jpg');
INSERT INTO `products` (albumcim, eloado, leiras, allapot, kategoria, ar, boritokep)
VALUES ('Time Out', 'Dave Brubeck Quartet', 'Innovative jazz rhythms', 'Új', 'Jazz', 7900, 'Assets\\images\\products\\timeout.jpg');
INSERT INTO `products` (albumcim, eloado, leiras, allapot, kategoria, ar, boritokep)
VALUES ('Texas Flood', 'Stevie Ray Vaughan', 'Powerful blues guitar', 'Új', 'Blues', 8100, 'Assets\\images\\products\\texasflood.jpg');
INSERT INTO `products` (albumcim, eloado, leiras, allapot, kategoria, ar, boritokep)
VALUES ('Born Under a Bad Sign', 'Albert King', 'Blues classic', 'Új', 'Blues', 7600, 'Assets\\images\\products\\bornunderabadsign.jpg');
INSERT INTO `products` (albumcim, eloado, leiras, allapot, kategoria, ar, boritokep)
VALUES ('Elvis Presley', 'Elvis Presley', 'The King of Rock \'n\' Roll', 'Új', 'Rock \'n\' Roll', 9000,
        'Assets\\images\\products\\elvispresley.jpg');
INSERT INTO `products` (albumcim, eloado, leiras, allapot, kategoria, ar, boritokep)
VALUES ('Chuck Berry Is on Top', 'Chuck Berry', 'Iconic rock \'n\' roll', 'Új', 'Rock \'n\' Roll', 8300,
        'Assets\\images\\products\\chuckberry.jpg');
INSERT INTO `products` (albumcim, eloado, leiras, allapot, kategoria, ar, boritokep)
VALUES ('The Four Seasons', 'Vivaldi', 'Baroque masterpiece', 'Új', 'Klasszikus Zene', 9500, 'Assets\\images\\products\\fourseasons.jpg');
INSERT INTO `products` (albumcim, eloado, leiras, allapot, kategoria, ar, boritokep)
VALUES ('Symphony No. 5', 'Beethoven', 'Iconic classical symphony', 'Új', 'Klasszikus Zene', 8800, 'Assets\\images\\products\\beethoven5.jpg');
INSERT INTO `products` (albumcim, eloado, leiras, allapot, kategoria, ar, boritokep)
VALUES ('Golden Hits', 'Johnny Cash', 'Country music legend', 'Új', 'Country', 8200, 'Assets\\images\\products\\johnnycash.jpg');
INSERT INTO `products` (albumcim, eloado, leiras, allapot, kategoria, ar, boritokep)
VALUES ('Red Headed Stranger', 'Willie Nelson', 'Classic country products', 'Új', 'Country', 7700, 'Assets\\images\\products\\willienelson.jpg');
INSERT INTO `products` (albumcim, eloado, leiras, allapot, kategoria, ar, boritokep)
VALUES ('What\'s Going On', 'Marvin Gaye', 'Soulful social commentary', 'Új', 'Soul és R&B', 8600, 'Assets\\images\\products\\whatsgoingon.jpg');
INSERT INTO `products` (albumcim, eloado, leiras, allapot, kategoria, ar, boritokep)
VALUES ('Lady Soul', 'Aretha Franklin', 'The Queen of Soul', 'Új', 'Soul és R&B', 8000, 'Assets\\images\\products\\ladysoul.jpg');
INSERT INTO `products` (albumcim, eloado, leiras, allapot, kategoria, ar, boritokep)
VALUES ('Thriller', 'Michael Jackson', 'Best-selling products of all time', 'Új', 'Pop', 10000, 'Assets\\images\\products\\thriller.jpg');
INSERT INTO `products` (albumcim, eloado, leiras, allapot, kategoria, ar, boritokep)
VALUES ('1989', 'Taylor Swift', 'Modern pop classic', 'Új', 'Pop', 8500, 'Assets\\images\\products\\1989.jpg');
INSERT INTO `products` (albumcim, eloado, leiras, allapot, kategoria, ar, boritokep)
VALUES ('Dark Side of the Moon', 'Pink Floyd', 'Psychedelic rock masterpiece', 'Új', 'Rock', 9500,
        'Assets\\images\\products\\darksideofthemoon.jpg');
INSERT INTO `products` (albumcim, eloado, leiras, allapot, kategoria, ar, boritokep)
VALUES ('Led Zeppelin IV', 'Led Zeppelin', 'Iconic rock products', 'Új', 'Rock', 9200, 'Assets\\images\\products\\ledzeppeliniv.jpg');
INSERT INTO `products` (albumcim, eloado, leiras, allapot, kategoria, ar, boritokep)
VALUES ('10', 'Tankcsapda', 'Magyar rock zene', 'Új', 'Rock', 7800, 'Assets\\images\\products\\tankcsapda10.jpg');
INSERT INTO `products` (albumcim, eloado, leiras, allapot, kategoria, ar, boritokep)
VALUES ('Best of Edda', 'Edda Művek', 'Magyar rock klasszikusok', 'Új', 'Rock', 7700, 'Assets\\images\\products\\eddamuvek.jpg');
INSERT INTO `products` (albumcim, eloado, leiras, allapot, kategoria, ar, boritokep)
VALUES ('Homework', 'Daft Punk', 'French electronic duo debut', 'Új', 'Electronic', 8900, 'Assets\\images\\products\\homework.jpg');
INSERT INTO `products` (albumcim, eloado, leiras, allapot, kategoria, ar, boritokep)
VALUES ('Selected Ambient Works 85-92', 'Aphex Twin', 'Ambient techno pioneer', 'Új', 'Electronic', 8200,
        'Assets\\images\\products\\aphextwin.jpg');
INSERT INTO `products` (albumcim, eloado, leiras, allapot, kategoria, ar, boritokep)
VALUES ('Illmatic', 'Nas', 'East Coast hip-hop classic', 'Új', 'Hip-Hop', 8700, 'Assets\\images\\products\\illmatic.jpg');
INSERT INTO `products` (albumcim, eloado, leiras, allapot, kategoria, ar, boritokep)
VALUES ('The Chronic', 'Dr. Dre', 'West Coast rap landmark', 'Új', 'Hip-Hop', 9000, 'Assets\\images\\products\\thechronic.jpg');
INSERT INTO `products` (albumcim, eloado, leiras, allapot, kategoria, ar, boritokep)
VALUES ('Blue', 'Joni Mitchell', 'Folk music masterpiece', 'Új', 'Folk', 8300, 'Assets\\images\\products\\blue.jpg');
INSERT INTO `products` (albumcim, eloado, leiras, allapot, kategoria, ar, boritokep)
VALUES ('Táncdalok', 'Kovács Kati', 'Magyar népzene', 'Új', 'Folk', 7500, 'Assets\\images\\products\\kovacskati.jpg');
INSERT INTO `products` (albumcim, eloado, leiras, allapot, kategoria, ar, boritokep)
VALUES ('Master of Puppets', 'Metallica', 'Thrash metal essential', 'Új', 'Metal', 9200, 'Assets\\images\\products\\masterofpuppets.jpg');
INSERT INTO `products` (albumcim, eloado, leiras, allapot, kategoria, ar, boritokep)
VALUES ('Paranoid', 'Black Sabbath', 'Heavy metal originators', 'Új', 'Metal', 8600, 'Assets\\images\\products\\paranoid.jpg');
INSERT INTO `products` (albumcim, eloado, leiras, allapot, kategoria, ar, boritokep)
VALUES ('Legend', 'Bob Marley', 'Reggae icon compilation', 'Új', 'Reggae', 8400, 'Assets\\images\\products\\legend.jpg');
INSERT INTO `products` (albumcim, eloado, leiras, allapot, kategoria, ar, boritokep)
VALUES ('Duppy Conqueror', 'Bob Marley & The Wailers', 'Roots reggae essential', 'Új', 'Reggae', 7900,
        'Assets\\images\\products\\duppyconqueror.jpg');
INSERT INTO `products` (albumcim, eloado, leiras, allapot, kategoria, ar, boritokep)
VALUES ('Álomarcú lány', 'Presser Gábor', 'Magyar pop zene', 'Új', 'Pop', 7800, 'Assets\\images\\products\\alomarculany.jpg');
INSERT INTO `products` (albumcim, eloado, leiras, allapot, kategoria, ar, boritokep)
VALUES ('Best of Zséda', 'Zséda', 'Magyar pop slágerek', 'Új', 'Pop', 7600, 'Assets\\images\\products\\zsedabestof.jpg');

CREATE TABLE `categories`
(
    `categoryID` bigint(20)  NOT NULL,
    `p_cat_name` varchar(30) NOT NULL,
    `p_cat_desc` text        NOT NULL
);


INSERT INTO `categories` (`categoryID`, `p_cat_name`, `p_cat_desc`)
VALUES (1, 'Jazz',
        'A jazz egy amerikai eredetű műfaj, amely a 20. század elején alakult ki. Jellemzően improvizatív jellegű, és gyakran használ swing ritmusokat, valamint hangsúlyos szólóka'),
       (2, 'Blues',
        'A blues szintén az Egyesült Államokban gyökerezik, különösen a déli államok afroamerikai közösségeiben. Jellemzője a tizenkét ütemű forma és a mély, érzelmes előadásmód.'),
       (3, 'Rock ''n'' Roll',
        'Ez a műfaj a 1950-es években vált népszerűvé, és forradalmasította a populáris zenét. Jellemzően dinamikus ritmusokkal és egyszerű, de energikus dallamokkal operál'),
       (4, 'Klasszikus Zene',
        'A klasszikus zenei felvételek között megtalálhatóak a barokk, a klasszikus és a romantikus korszakok nagy szerzőinek művei. Jellemzően komplex szerkezetűek és rendkívül változatos hangszínezettel bírnak'),
       (5, 'Country',
        'A country zene a folk zene amerikai változata, amely a vidéki élet élményeire összpontosít. Gyakran használ akusztikus hangszereket, mint a gitár és a hegedű'),
       (6, 'Soul és R&B',
        'A soul zene az afroamerikai evangéliumi zenéből és a rhythm and blues-ból fejlődött ki. Jellemzői az érzelmes ének és a hangsúlyos ritmusszekció'),
       (7, 'Rock',
        'A rock zene gyökerei a rock ''n'' rollban és a blues-ban találhatók, de az évtizedek során számos alstílus fejlődött ki belőle. Jellemzői közé tartozik a hangsúlyos dob- és elektromos gitár-használat, valamint az erős, gyakran lázadó szövegek.'),
       (8, 'Pop',
        'A popzene széles körben elterjedt és sokféle zenei stílust foglal magában. Fő jellemzője a könnyen emészthető, gyakran slágeres jelleg');

CREATE TABLE `product_category`
(
    `productID`  bigint(20) NOT NULL,
    `categoryID` bigint(20) NOT NULL
);

INSERT INTO `product_category` (`productID`, `categoryID`)
VALUES (1, 1),
       (2, 2),
       (3, 4),
       (4, 7),
       (5, 7),
       (6, 5),
       (7, 2),
       (8, 7),
       (9, 7),
       (10, 3),
       (11, 2),
       (12, 2),
       (13, 6),
       (14, 6),
       (15, 6),
       (16, 6),
       (17, 6),
       (18, 6),
       (19, 6),
       (20, 6),
       (21, 6),
       (22, 6),
       (23, 1),
       (24, 2),
       (25, 3),
       (26, 4),
       (27, 5),
       (28, 6),
       (29, 7),
       (30, 8);
