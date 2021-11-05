-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 04, 2021 at 04:02 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wootlab`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

DROP TABLE IF EXISTS `cars`;
CREATE TABLE IF NOT EXISTS `cars` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text,
  `info` text,
  `locations` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `name`, `info`, `locations`) VALUES
(1, 'car', NULL, '{\"1636031737\":\"Abuja, FCT\",\"1636031738\":{\"longitude\":\"7.3986\",\"latitude\":\"9.0765\",\"date\":\"20-11-2021\",\"time\":\"7:20am\"},\"1636031739\":{\"longitude\":\"7.3986\",\"latitude\":\"9.0765\",\"date\":\"20-11-2021\",\"time\":\"7:20am\"},\"1636031740\":{\"longitude\":\"7.3986\",\"latitude\":\"9.0765\",\"date\":\"20-11-2021\",\"time\":\"7:20am\"},\"1636031741\":{\"longitude\":\"7.3986\",\"latitude\":\"9.0765\",\"date\":\"10-11-2021\",\"time\":\"8:20am\"},\"1636031742\":{\"longitude\":\"7.3986\",\"latitude\":\"9.0765\",\"date\":\"10-11-2021\",\"time\":\"8:20am\"}}'),
(2, NULL, '[{\"car_model\":\"m4\",\"current_KM\":\"10\",\"license_plate\":\"32-3234-2\",\"fuel_type\":\"gas\",\"max_load_in_kg\":null}]', NULL),
(3, NULL, '[{\"car_model\":\"m4\",\"current_KM\":\"10\",\"license_plate\":\"32-3234-2\",\"fuel_type\":\"gas\",\"max_load_in_kg\":\"20\"}]', NULL),
(4, NULL, '[{\"car_model\":\"m4\",\"current_KM\":\"10\",\"license_plate\":\"32-3234-2\",\"fuel_type\":\"petrol\",\"max_load_in_kg\":\"20\"}]', NULL),
(5, NULL, '[{\"car_model\":null,\"current_KM\":null,\"license_plate\":null,\"fuel_type\":null,\"max_load_in_kg\":null}]', NULL),
(6, NULL, '[{\"car_model\":\"m4\",\"current_KM\":\"10\",\"license_plate\":\"32-3234-2\",\"fuel_type\":\"gas\",\"max_load_in_kg\":\"20\"}]', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
