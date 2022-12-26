-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 26, 2022 at 08:11 AM
-- Server version: 5.6.13
-- PHP Version: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `bathrooms`
--

CREATE TABLE IF NOT EXISTS `bathrooms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `location` varchar(22) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `bathrooms`
--

INSERT INTO `bathrooms` (`id`, `location`, `gender`, `status`) VALUES
(1, '300 wing', 'male', 1),
(2, '300 wing', 'female', 1),
(3, '700 wing', 'male', 1),
(4, '700 wing', 'female', 1),
(5, 'Parking Lot', 'male', 1),
(6, 'Parking Lot', 'female', 1),
(7, 'New Building (bottom)', 'male', 1),
(8, 'New Building (bottom)', 'female', 1),
(9, 'New Building (top)', 'male', 1),
(10, 'New Building (top)', 'female', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
