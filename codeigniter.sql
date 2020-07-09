-- Adminer 4.6.3 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP DATABASE IF EXISTS `codeigniter`;
CREATE DATABASE `codeigniter` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `codeigniter`;

DROP TABLE IF EXISTS `tblusers`;
CREATE TABLE `tblusers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(150) NOT NULL,
  `LastName` varchar(150) NOT NULL,
  `EmailId` varchar(120) NOT NULL,
  `ContactNumber` char(11) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tblusers` (`id`, `FirstName`, `LastName`, `EmailId`, `ContactNumber`, `Address`, `PostingDate`) VALUES
(3,	'Akash',	'Shrimali',	'akash@gmail.com',	'1234567890',	'Ahmedabad, Guajrat.',	'2020-07-09 08:14:32')
ON DUPLICATE KEY UPDATE `id` = VALUES(`id`), `FirstName` = VALUES(`FirstName`), `LastName` = VALUES(`LastName`), `EmailId` = VALUES(`EmailId`), `ContactNumber` = VALUES(`ContactNumber`), `Address` = VALUES(`Address`), `PostingDate` = VALUES(`PostingDate`);

-- 2020-07-09 08:16:26