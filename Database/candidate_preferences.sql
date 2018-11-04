-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 20, 2014 at 05:28 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ecounselling`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidate_preferences`
--

CREATE TABLE IF NOT EXISTS `candidate_preferences` (
  `rank` int(30) NOT NULL,
  `pref_1` int(30) NOT NULL,
  `pref_2` int(30) NOT NULL,
  `pref_3` int(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `candidate_preferences`
--

INSERT INTO `candidate_preferences` (`rank`, `pref_1`, `pref_2`, `pref_3`) VALUES
(1, 1, 2, 3),
(2, 6, 10, 3),
(3, 1, 3, 6),
(4, 6, 10, 1),
(5, 1, 6, 10),
(6, 11, 10, 1),
(7, 25, 10, 1),
(8, 11, 10, 2),
(9, 10, 1, 3),
(10, 3, 6, 25),
(11, 1, 2, 25),
(12, 25, 26, 1),
(13, 7, 1, 26),
(14, 3, 17, 24),
(15, 3, 2, 1),
(16, 4, 3, 7),
(17, 1, 4, 8),
(18, 9, 7, 25),
(19, 2, 3, 6),
(20, 1, 6, 10),
(21, 2, 26, 16),
(22, 6, 25, 9),
(23, 6, 3, 2),
(24, 10, 2, 3),
(25, 3, 14, 11),
(26, 3, 5, 7),
(27, 8, 1, 12),
(28, 10, 27, 9),
(29, 13, 15, 17),
(30, 6, 7, 18),
(31, 21, 15, 9),
(32, 19, 12, 11),
(33, 14, 10, 5),
(34, 4, 9, 17),
(35, 9, 10, 17),
(36, 19, 17, 4),
(37, 9, 3, 6),
(38, 7, 8, 9),
(39, 19, 15, 16),
(40, 12, 14, 5),
(41, 9, 10, 11),
(42, 17, 11, 14),
(43, 5, 8, 13),
(44, 10, 11, 12),
(45, 19, 25, 18),
(46, 14, 15, 16),
(47, 7, 8, 9),
(48, 12, 13, 14),
(49, 9, 12, 18),
(50, 11, 13, 15),
(90, 1, 3, 4);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
