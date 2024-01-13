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