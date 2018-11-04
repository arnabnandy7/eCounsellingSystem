
-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 19, 2014 at 11:21 AM
-- Server version: 5.1.57
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `a1393332_ecounse`
--

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `subject` varchar(1000) COLLATE latin1_general_ci NOT NULL,
  `name` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `type` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `size` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `path` varchar(1000) COLLATE latin1_general_ci NOT NULL,
  `date` varchar(255) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=18 ;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` VALUES(14, 'REPORTING CENTRES', 'REPORTING CENTRES', 'REPORTING CENTRES.pdf', 'application/pdf', '266898', 'http://admin.ecounselling.tk/files/upload/REPORTING CENTRES.pdf', '');
INSERT INTO `notice` VALUES(15, 'SEAT ALLOTMENT ALGORITHM', 'SEAT ALLOTMENT ALGORITHM', 'SEAT ALLOTMENT ALGORITHM.pdf', 'application/pdf', '223418', 'http://admin.ecounselling.tk/files/upload/SEAT ALLOTMENT ALGORITHM.pdf', '');
INSERT INTO `notice` VALUES(16, 'TENTATIVE COUNSELLING SCHEDULE', 'TENTATIVE COUNSELLING SCHEDULE', 'TENTATIVE COUNSELLING SCHEDULE.pdf', 'application/pdf', '176472', 'http://admin.ecounselling.tk/files/upload/TENTATIVE COUNSELLING SCHEDULE.pdf', '');
INSERT INTO `notice` VALUES(13, 'JECA_Vacancy_Status', 'JECA_Vacancy_Status', 'JECA_Vacancy_Status.pdf', 'application/pdf', '52066', 'http://admin.ecounselling.tk/files/upload/JECA_Vacancy_Status.pdf', '');
INSERT INTO `notice` VALUES(12, 'JECA_Counselling_Instruction', 'JECA_Counselling_Instruction', 'JECA_Counselling_Instruction.pdf', 'application/pdf', '494757', 'http://admin.ecounselling.tk/files/upload/JECA_Counselling_Instruction.pdf', '');
INSERT INTO `notice` VALUES(10, 'JECA 2010 Opening and Closing Rank', 'JECA 2010 Opening and Closing Rank', 'JECA 2010 Opening and Closing Rank.pdf', 'application/pdf', '212314', 'http://admin.ecounselling.tk/files/upload/JECA 2010 Opening and Closing Rank.pdf', '');
INSERT INTO `notice` VALUES(17, 'WITHDRAWAL PROCEDURE', 'WITHDRAWAL PROCEDURE', 'WITHDRAWAL PROCEDURE.pdf', 'application/pdf', '162483', 'http://admin.ecounselling.tk/files/upload/WITHDRAWAL PROCEDURE.pdf', '');
