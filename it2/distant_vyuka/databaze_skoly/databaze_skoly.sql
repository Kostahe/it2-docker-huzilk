-- Adminer 4.8.1 MySQL 11.1.2-MariaDB-1:11.1.2+maria~ubu2204 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `adresy`;
CREATE TABLE `adresy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ulice` varchar(50) NOT NULL,
  `psc` varchar(10) NOT NULL,
  `mesto_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `mesto_id` (`mesto_id`),
  CONSTRAINT `adresy_ibfk_1` FOREIGN KEY (`mesto_id`) REFERENCES `mesta` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `adresy` (`id`, `ulice`, `psc`, `mesto_id`) VALUES
(1,	'Dlouhá 15',	'11000',	1),
(2,	'Hlavní 18',	'60200',	2),
(3,	'Jiráskova 3',	'37001',	6),
(4,	'Národní 6',	'30100',	3),
(5,	'Masarykova 12',	'70200',	4),
(6,	'U Lesa 9',	'77900',	5),
(7,	'Školní 20',	'46001',	7),
(8,	'Zahradní 1',	'40011',	8),
(9,	'Nová 10',	'50002',	9),
(10,	'Polní 5',	'76001',	10);

DROP TABLE IF EXISTS `krouzek`;
CREATE TABLE `krouzek` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nazev` varchar(50) NOT NULL,
  `popis` varchar(50) NOT NULL,
  `ucitel_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ucitel_id` (`ucitel_id`),
  CONSTRAINT `krouzek_ibfk_1` FOREIGN KEY (`ucitel_id`) REFERENCES `ucitele` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `krouzek` (`id`, `nazev`, `popis`, `ucitel_id`) VALUES
(1,	'Anglický kroužek',	'Kroužek zaměřený na zlepšování angličtiny',	1),
(2,	'Kroužek výtvarného umění',	'Kroužek pro rozvoj výtvarného talentu',	2),
(3,	'Matematický kroužek',	'Kroužek zaměřený na procvičování matematiky',	3),
(4,	'Hudební kroužek',	'Kroužek pro zájemce o hudbu a hudební nástroje',	4),
(5,	'Sportovní kroužek',	'Kroužek pro sportovní aktivity a cvičení',	5);

DROP TABLE IF EXISTS `mesta`;
CREATE TABLE `mesta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nazev` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `mesta` (`id`, `nazev`) VALUES
(1,	'Praha'),
(2,	'Brno'),
(3,	'Plzeň'),
(4,	'Ostrava'),
(5,	'Olomouc'),
(6,	'České Budějovice'),
(7,	'Liberec'),
(8,	'Ústí nad Labem'),
(9,	'Hradec Králové'),
(10,	'Zlín');

DROP TABLE IF EXISTS `studenti`;
CREATE TABLE `studenti` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jmeno` varchar(50) NOT NULL,
  `prijmeni` varchar(50) NOT NULL,
  `datum_narozeni` date NOT NULL,
  `trida_id` int(11) NOT NULL,
  `adresa_id` int(11) NOT NULL,
  `krouzek_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `trida_id` (`trida_id`),
  KEY `adresa_id` (`adresa_id`),
  KEY `krouzek_id` (`krouzek_id`),
  CONSTRAINT `studenti_ibfk_1` FOREIGN KEY (`trida_id`) REFERENCES `tridy` (`id`),
  CONSTRAINT `studenti_ibfk_3` FOREIGN KEY (`adresa_id`) REFERENCES `adresy` (`id`),
  CONSTRAINT `studenti_ibfk_4` FOREIGN KEY (`krouzek_id`) REFERENCES `krouzek` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `studenti` (`id`, `jmeno`, `prijmeni`, `datum_narozeni`, `trida_id`, `adresa_id`, `krouzek_id`) VALUES
(1,	'Petr',	'Novák',	'2005-03-15',	1,	1,	2),
(2,	'Eva',	'Svobodová',	'2006-07-22',	1,	2,	2),
(3,	'Jakub',	'Dvořák',	'2005-11-10',	2,	3,	3),
(4,	'Anna',	'Procházková',	'2006-02-04',	2,	4,	4),
(5,	'Lukáš',	'Novotný',	'2007-09-18',	3,	5,	5),
(6,	'Tereza',	'Marešová',	'2005-05-30',	3,	6,	1),
(7,	'David',	'Kovařík',	'2006-12-01',	4,	7,	2),
(8,	'Karolína',	'Černá',	'2005-08-07',	4,	8,	3),
(9,	'Martin',	'Pospíšil',	'2006-04-11',	5,	9,	4),
(10,	'Veronika',	'Malá',	'2005-10-25',	5,	10,	5);

DROP TABLE IF EXISTS `tridy`;
CREATE TABLE `tridy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nazev` varchar(10) NOT NULL,
  `ucitel_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ucitel_id` (`ucitel_id`),
  CONSTRAINT `tridy_ibfk_1` FOREIGN KEY (`ucitel_id`) REFERENCES `ucitele` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `tridy` (`id`, `nazev`, `ucitel_id`) VALUES
(1,	'1.A',	1),
(2,	'2.A',	2),
(3,	'3.B',	3),
(4,	'4.C',	4),
(5,	'5.D',	5);

DROP TABLE IF EXISTS `ucitele`;
CREATE TABLE `ucitele` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jmeno` varchar(50) NOT NULL,
  `prijmeni` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `ucitele` (`id`, `jmeno`, `prijmeni`) VALUES
(1,	'Jan',	'Novák'),
(2,	'Marie',	'Kovářová'),
(3,	'Jiří',	'Doležal'),
(4,	'Kateřina',	'Novotná'),
(5,	'Pavel',	'Nový');

-- 2024-04-01 19:06:28