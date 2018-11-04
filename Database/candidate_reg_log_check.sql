-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 19, 2014 at 02:33 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `a5287533_ecounse`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidate_reg_log_check`
--

CREATE TABLE IF NOT EXISTS `candidate_reg_log_check` (
  `email` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `activation_code` varchar(50) NOT NULL,
  `chk_flg` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate_reg_log_check`
--

INSERT INTO `candidate_reg_log_check` (`email`, `password`, `activation_code`, `chk_flg`) VALUES
('subhrajyoti_sd-2@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 1),
('saikat.banj@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'taCLi', 1),
('arnabnandy2@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'IJC0S', 1),
('subhrajyoti_sd-1@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 1),
('subhrajyoti_sd-3@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 1),
('subhrajyoti_sd-4@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 1),
('subhrajyoti_sd-5@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 1),
('subhrajyoti_sd-6@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 1),
('subhrajyoti_sd-7@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 1),
('subhrajyoti_sd-8@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 1),
('subhrajyoti_sd-9@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 1),
('subhrajyoti_sd-10@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 1),
('subhrajyoti_sd-11@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 1),
('subhrajyoti_sd-12@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 1),
('subhrajyoti_sd-13@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 1),
('subhrajyoti_sd-14@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 1),
('subhrajyoti_sd-15@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 1),
('subhrajyoti_sd-16@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 1),
('subhrajyoti_sd-17@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 1),
('subhrajyoti_sd-18@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 1),
('subhrajyoti_sd-19@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 1),
('subhrajyoti_sd-20@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 1),
('subhrajyoti_sd-21@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 1),
('subhrajyoti_sd-22@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 1),
('subhrajyoti_sd-23@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 1),
('subhrajyoti_sd-24@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 1),
('arnabtech1-25@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 1),
('arnabtech1-26@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 1),
('arnabtech1-27@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 1),
('arnabtech1-28@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 1),
('arnabtech1-29@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 1),
('arnabtech1-30@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 1),
('arnabtech1-31@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 1),
('arnabtech1-32@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 1),
('arnabtech1-33@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 1),
('arnabtech1-34@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 1),
('arnabtech1-35@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 1),
('arnabtech1-36@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 1),
('arnabtech1-37@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 1),
('arnabtech1-38@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 1),
('arnabtech1-39@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 1),
('arnabtech1-40@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 1),
('arnabtech1-41@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 1),
('arnabtech1-42@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 1),
('arnabtech1-43@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 1),
('arnabtech1-44@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 1),
('arnabtech1-45@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 1),
('arnabtech1-46@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 1),
('arnabtech1-47@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 1),
('arnabtech1-48@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 1),
('arnabtech1-49@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 1),
('arnabtech1-50@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
