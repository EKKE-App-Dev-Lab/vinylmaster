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

CREATE TABLE `product_type`
(
    `productID` bigint(20) NOT NULL,
    `typeID`    bigint(20) NOT NULL
);

INSERT INTO `product_type` (`productID`, `typeID`)
VALUES (1, 2),
       (2, 2),
       (3, 2),
       (4, 2),
       (5, 2),
       (6, 2),
       (7, 1),
       (8, 1),
       (9, 1),
       (10, 1),
       (11, 1),
       (12, 1),
       (13, 2),
       (14, 2),
       (15, 2),
       (16, 2),
       (17, 2),
       (18, 2),
       (19, 2),
       (20, 2),
       (21, 2),
       (22, 2),
       (23, 2),
       (24, 2),
       (25, 2),
       (26, 2),
       (27, 2),
       (28, 2),
       (29, 2),
       (30, 2);

CREATE TABLE `types`
(
    `typeID`      bigint(20)  NOT NULL,
    `p_type_name` varchar(30) NOT NULL,
    `p_type_desc` text        NOT NULL
) ;

INSERT INTO `types` (`typeID`, `p_type_name`, `p_type_desc`)
VALUES (1, 'új', 'az új albumokat újként jelölik'),
       (2, 'kiemelt', 'a nagy érdeklődést kiváltó albumokat kiemeltként jelölik'),
       (3, 'akciós', 'az akciós termékeket akciós jelölik'),
       (4, 'legjobb', 'a legjobban fogyó termékeket legjobbként jelölik');

CREATE TABLE `user`
(
    `userID`       bigint(20)   NOT NULL,
    `uname`        varchar(50)  NOT NULL,
    `pass`         varchar(100) NOT NULL,
    `fname`        varchar(50)  NOT NULL,
    `lname`        varchar(50)  NOT NULL,
    `email`        varchar(50)  NOT NULL,
    `address`      varchar(60)  NOT NULL,
    `phone`        varchar(8)   NOT NULL,
    `description`  text         NOT NULL,
    `vkey`         varchar(100) NOT NULL,
    `verified`     tinyint(1)   NOT NULL,
    `isSubscribed` tinyint(1)   NOT NULL,
    `isAdmin`      tinyint(1)   NOT NULL,
    `createDate`   timestamp    NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
);

CREATE TABLE `cart`
(
    `cartID` bigint(20) NOT NULL,
    `userID` bigint(20) NOT NULL
);

CREATE TABLE `cartitem`
(
    `cartItemID` bigint(20)  NOT NULL,
    `productID`  bigint(20)  NOT NULL,
    `cartID`     bigint(20)  NOT NULL,
    `price`      float       NOT NULL,
    `quantity`   smallint(6) NOT NULL,
    `createDate` timestamp   NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
);

CREATE TABLE `userorder`
(
    `orderID`    bigint(20)   NOT NULL,
    `userID`     bigint(20)   NOT NULL,
    `total`      float        NOT NULL,
    `address`    varchar(100) NOT NULL,
    `phone`      varchar(8)   NOT NULL,
    `status`     text         NOT NULL,
    `createDate` timestamp    NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
);

CREATE TABLE `orderitem`
(
    `orderItemID` bigint(20)  NOT NULL,
    `productID`   bigint(20)  NOT NULL,
    `orderID`     bigint(20)  NOT NULL,
    `price`       float       NOT NULL,
    `quantity`    smallint(6) NOT NULL,
    `createDate`  timestamp   NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
);

CREATE TABLE `transaction`
(
    `tranID`        bigint(20) NOT NULL,
    `userID`        bigint(20) NOT NULL,
    `orderID`       bigint(20) NOT NULL,
    `paymentMethod` text       NOT NULL,
    `status`        text       NOT NULL,
    `createDate`    timestamp  NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
);


ALTER TABLE `cart`
    ADD PRIMARY KEY (`cartID`),
    ADD KEY `userID` (`userID`);

ALTER TABLE `cartitem`
    ADD PRIMARY KEY (`cartItemID`),
    ADD KEY `1_Cart_Zero-Or-More_CartItems` (`cartID`),
    ADD KEY `1_Product_Many_CartItems` (`productID`);

ALTER TABLE `categories`
    ADD PRIMARY KEY (`categoryID`);

ALTER TABLE `orderitem`
    ADD PRIMARY KEY (`orderItemID`),
    ADD KEY `1_Order_Many_OrderItems` (`orderID`),
    ADD KEY `1_Product_Many_OrderItems` (`productID`);

ALTER TABLE `product_category`
    ADD KEY `1_Product_Many_Categories` (`productID`),
    ADD KEY `1_Category_Many_Products` (`categoryID`);

ALTER TABLE `product_type`
    ADD KEY `1_Product_Many_Types` (`productID`),
    ADD KEY `1_Type_Many_Products` (`typeID`);

ALTER TABLE `transaction`
    ADD PRIMARY KEY (`tranID`),
    ADD KEY `1_Order_Many_Transactions` (`orderID`),
    ADD KEY `1_User_Many_Transactions` (`userID`);

ALTER TABLE `types`
    ADD PRIMARY KEY (`typeID`);

ALTER TABLE `user`
    ADD PRIMARY KEY (`userID`);

ALTER TABLE `userorder`
    ADD PRIMARY KEY (`orderID`),
    ADD KEY `1_User_Many_Orders` (`userID`);

ALTER TABLE `cart`
    MODIFY `cartID` bigint(20) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 1;

ALTER TABLE `cartitem`
    MODIFY `cartItemID` bigint(20) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 1;

ALTER TABLE `categories`
    MODIFY `categoryID` bigint(20) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 1;

ALTER TABLE `orderitem`
    MODIFY `orderItemID` bigint(20) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 1;

ALTER TABLE `transaction`
    MODIFY `tranID` bigint(20) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 1;

ALTER TABLE `types`
    MODIFY `typeID` bigint(20) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 1;

ALTER TABLE `user`
    MODIFY `userID` bigint(20) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 1;

ALTER TABLE `userorder`
    MODIFY `orderID` bigint(20) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 1;


ALTER TABLE `cartitem`
    ADD CONSTRAINT `1_Cart_Zero-Or-More_CartItems` FOREIGN KEY (`cartID`) REFERENCES `cart` (`cartID`) ON DELETE CASCADE ON UPDATE CASCADE,
    ADD CONSTRAINT `1_Product_Many_CartItems` FOREIGN KEY (`productID`) REFERENCES `products` (`productID`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `orderitem`
    ADD CONSTRAINT `1_Order_Many_OrderItems` FOREIGN KEY (`orderID`) REFERENCES `userorder` (`orderID`) ON DELETE CASCADE ON UPDATE CASCADE,
    ADD CONSTRAINT `1_Product_Many_OrderItems` FOREIGN KEY (`productID`) REFERENCES `products` (`productID`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `product_category`
    ADD CONSTRAINT `1_Category_Many_Products` FOREIGN KEY (`categoryID`) REFERENCES `categories` (`categoryID`) ON DELETE CASCADE ON UPDATE CASCADE,
    ADD CONSTRAINT `1_Product_Many_Categories` FOREIGN KEY (`productID`) REFERENCES `products` (`productID`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `product_type`
    ADD CONSTRAINT `1_Product_Many_Types` FOREIGN KEY (`productID`) REFERENCES `products` (`productID`) ON DELETE CASCADE ON UPDATE CASCADE,
    ADD CONSTRAINT `1_Type_Many_Products` FOREIGN KEY (`typeID`) REFERENCES `types` (`typeID`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `transaction`
    ADD CONSTRAINT `1_Order_Many_Transactions` FOREIGN KEY (`orderID`) REFERENCES `userorder` (`orderID`) ON DELETE CASCADE ON UPDATE CASCADE,
    ADD CONSTRAINT `1_User_Many_Transactions` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `userorder`
    ADD CONSTRAINT `1_User_Many_Orders` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `cart`
    ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

COMMIT;


