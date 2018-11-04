-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 20, 2014 at 05:29 PM
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
-- Table structure for table `seat_allotments`
--

CREATE TABLE IF NOT EXISTS `seat_allotments` (
  `rank` int(25) NOT NULL,
  `allot_clg_id` int(25) NOT NULL,
  `pref_clg` int(3) NOT NULL,
  `seqnc_no` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `upgrd_sts` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `admited` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `active` varchar(255) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `seat_allotments`
--

INSERT INTO `seat_allotments` (`rank`, `allot_clg_id`, `pref_clg`, `seqnc_no`, `upgrd_sts`, `admited`, `active`) VALUES
(1, 1, 1, '782204680', 'N', '', ''),
(2, 6, 1, '1961793558', 'N', '', ''),
(3, 1, 1, '511671246', 'N', '', ''),
(4, 6, 1, '1509208298', 'N', '', ''),
(5, 1, 1, '969179856', 'N', '', ''),
(6, 11, 1, '29226411', 'N', '', ''),
(7, 25, 1, '1502859317', 'N', '', ''),
(8, 11, 1, '381832264', 'N', '', ''),
(9, 10, 1, '932589325', 'N', '', ''),
(10, 3, 1, '1897600976', 'N', '', ''),
(11, 1, 1, '383192441', 'N', '', ''),
(12, 25, 1, '312795594', 'N', '', ''),
(13, 7, 1, '789214657', 'N', '', ''),
(14, 3, 1, '1583303126', 'N', '', ''),
(15, 3, 1, '1362870260', 'N', '', ''),
(16, 4, 1, '1994621280', 'N', '', ''),
(17, 4, 2, '219027563', 'Y', '', 'Y'),
(18, 9, 1, '1416916618', 'N', '', ''),
(19, 2, 1, '1366285903', 'N', '', ''),
(20, 6, 2, '1100544984', '', '', 'Y'),
(21, 2, 1, '614078329', 'N', '', ''),
(22, 6, 1, '68009841', 'N', '', ''),
(23, 3, 2, '739256738', '', '', 'Y'),
(24, 10, 1, '706348993', 'N', '', ''),
(25, 14, 2, '726511897', '', '', 'Y'),
(26, 5, 2, '1708053650', '', '', 'Y'),
(27, 8, 1, '1776516747', 'N', '', ''),
(28, 10, 1, '1824032699', 'N', '', ''),
(29, 13, 1, '1081463074', 'N', '', ''),
(30, 7, 2, '428811077', '', '', 'Y'),
(31, 21, 1, '1540989505', 'N', '', ''),
(32, 19, 1, '485088834', 'N', '', ''),
(33, 14, 1, '1273471647', 'N', '', ''),
(34, 4, 1, '40657275', 'N', '', ''),
(35, 9, 1, '2081341524', 'N', '', ''),
(36, 19, 1, '217901864', 'N', '', ''),
(37, 9, 1, '816739619', 'N', '', ''),
(38, 7, 1, '955573316', 'N', '', ''),
(39, 19, 1, '563630085', 'N', '', ''),
(40, 12, 1, '105558857', 'N', '', ''),
(41, 9, 1, '1401850227', 'N', '', ''),
(42, 17, 1, '1719616760', 'N', '', ''),
(43, 5, 1, '2074693591', 'N', '', ''),
(44, 10, 1, '1320757921', 'N', '', ''),
(45, 19, 1, '809689694', 'N', '', ''),
(46, 14, 1, '1824992843', 'N', '', ''),
(47, 7, 1, '2018459986', 'N', '', ''),
(48, 12, 1, '1737085722', 'N', '', ''),
(49, 12, 2, '1737872218', '', '', 'Y'),
(50, 11, 1, '1580066834', 'N', '', ''),
(90, 4, 3, '762090387', '', '', 'Y');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
