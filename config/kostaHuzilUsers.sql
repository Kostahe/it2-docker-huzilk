-- Adminer 4.8.1 MySQL 11.1.2-MariaDB-1:11.1.2+maria~ubu2204 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `kosta-huzil-uzivatele`;
CREATE TABLE `kosta-huzil-uzivatele` (
                                         `kosta-huzil-id` int(11) NOT NULL AUTO_INCREMENT,
                                         `kosta-huzil-jmeno` varchar(255) NOT NULL,
                                         `kosta-huzil-prijmeni` varchar(255) NOT NULL,
                                         `kosta-huzil-pohlavi` varchar(255) NOT NULL,
                                         `kosta-huzil-zeme` varchar(255) NOT NULL,
                                         `kosta-huzil-vek` int(11) NOT NULL,
                                         `kosta-huzil-vaha` varchar(11) NOT NULL,
                                         `kosta-huzil-vyska` varchar(11) NOT NULL,
                                         `kosta-huzil-mzda` varchar(11) NOT NULL,
                                         `kosta-huzil-datum_registrace` datetime NOT NULL,
                                         PRIMARY KEY (`kosta-huzil-id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_czech_ci;

INSERT INTO `kosta-huzil-uzivatele` (`kosta-huzil-id`, `kosta-huzil-jmeno`, `kosta-huzil-prijmeni`, `kosta-huzil-pohlavi`, `kosta-huzil-zeme`, `kosta-huzil-vek`, `kosta-huzil-vaha`, `kosta-huzil-vyska`, `kosta-huzil-mzda`, `kosta-huzil-datum_registrace`) VALUES
                                                                                                                                                                                                                                                                   (1,	'Petr',	'Novák',	'Muž',	'Česká republika',	32,	'80',	'180',	'30000',	'2024-04-15 10:30:00'),
                                                                                                                                                                                                                                                                   (2,	'Markéta',	'Svobodová',	'Žena',	'Česká republika',	28,	'65',	'165',	'28000',	'2024-04-15 11:45:00'),
                                                                                                                                                                                                                                                                   (3,	'Jan',	'Dvořák',	'Muž',	'Česká republika',	45,	'90',	'175',	'35000',	'2024-04-15 12:20:00'),
                                                                                                                                                                                                                                                                   (4,	'Anna',	'Novotná',	'Žena',	'Česká republika',	38,	'70',	'170',	'32000',	'2024-04-15 13:05:00'),
                                                                                                                                                                                                                                                                   (5,	'Martin',	'Kovář',	'Muž',	'Česká republika',	29,	'75',	'185',	'29000',	'2024-04-15 14:15:00'),
                                                                                                                                                                                                                                                                   (6,	'Tereza',	'Nováková',	'Žena',	'Česká republika',	41,	'60',	'168',	'31000',	'2024-04-15 15:30:00'),
                                                                                                                                                                                                                                                                   (7,	'Jakub',	'Procházka',	'Muž',	'Česká republika',	35,	'85',	'178',	'33000',	'2024-04-15 16:20:00'),
                                                                                                                                                                                                                                                                   (8,	'Veronika',	'Malá',	'Žena',	'Česká republika',	27,	'55',	'160',	'27000',	'2024-04-15 17:45:00'),
                                                                                                                                                                                                                                                                   (9,	'David',	'Černý',	'Muž',	'Česká republika',	33,	'78',	'183',	'32000',	'2024-04-15 18:10:00'),
                                                                                                                                                                                                                                                                   (10,	'Lenka',	'Růžičková',	'Žena',	'Česká republika',	36,	'70',	'170',	'30000',	'2024-04-15 19:55:00');

-- 2024-04-15 19:38:11