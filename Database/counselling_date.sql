
-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 19, 2014 at 11:22 AM
-- Server version: 5.1.57
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `a1393332_ecounse`
--

-- --------------------------------------------------------

--
-- Table structure for table `counselling_date`
--

CREATE TABLE `counselling_date` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event` varchar(255) NOT NULL,
  `event_date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `counselling_date`
--

INSERT INTO `counselling_date` VALUES(6, 'Round 1 counselling allotment will be available after', '20th may 2014');
INSERT INTO `counselling_date` VALUES(5, 'Candidate registration closing on', '20th may 2014');
