-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 23, 2022 at 12:36 AM
-- Server version: 8.0.27
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clients_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `academies`
--

DROP TABLE IF EXISTS `academies`;
CREATE TABLE IF NOT EXISTS `academies` (
  `academy_id` int NOT NULL AUTO_INCREMENT,
  `academy` varchar(128) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`academy_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

--
-- Dumping data for table `academies`
--

INSERT INTO `academies` (`academy_id`, `academy`) VALUES
(1, 'Студенти од маркетинг'),
(2, 'Студенти од програмирање'),
(3, 'Студенти од data science'),
(4, 'Студенти од дизајн');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `client_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(128) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(128) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `company` varchar(128) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `phone` varchar(16) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `academy_id` int NOT NULL,
  PRIMARY KEY (`client_id`),
  KEY `fk_clients_academies` (`academy_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`client_id`, `name`, `email`, `company`, `phone`, `academy_id`) VALUES
(1, 'Dimche', 'dim@dim', 'ASD', '123123123', 1),
(2, 'Kevin Hart', 'kevin@yahoo.com', 'Heart', '123123123', 2),
(3, 'Dimche', 'dim@dim', 'ASD', '123123123', 1),
(4, 'Marko', 'mar@mar', 'Woker', '123123', 3),
(5, 'Petricia', 'pet@pet.com', 'Company', '123132', 2),
(6, 'Mark', 'Zucker', 'Meta', '00000', 3),
(7, 'Dimche', 'dimek12@hotmail.com', 'dadad', '123131232', 2),
(8, 'Ddadadad', 'dimche@dimche', 'DDDDDD', '14314141', 4),
(9, 'Bob Marley', 'bob_marley@marley.com', 'Marley', '123123', 4);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
