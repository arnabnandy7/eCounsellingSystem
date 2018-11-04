-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 19, 2014 at 03:18 PM
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
-- Table structure for table `candidate_details`
--

CREATE TABLE IF NOT EXISTS `candidate_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `candidate_id` int(50) NOT NULL,
  `candidate_name` varchar(50) NOT NULL,
  `rank` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `last_login` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55 ;

--
-- Dumping data for table `candidate_details`
--

INSERT INTO `candidate_details` (`id`, `candidate_id`, `candidate_name`, `rank`, `email`, `password`, `phone`, `address`, `last_login`) VALUES
(3, 985954604, 'SOUMYA SARKAR', '84', 'saikat.banj@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '+919433947924', 'dddd', ''),
(4, 190676841, 'Arnab Nandy', '90', 'arnabnandy2@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '+918013635767', 'Madhyamgram, Bankimpally(E)', ''),
(5, 985954604, 'MEGHALEE DEY', '1', 'subhrajyoti_sd-1@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '+918013888999', 'Kolkata', ''),
(6, 985954606, 'SHUBHRADEEP BHADRA', '2', 'subhrajyoti_sd-2@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '+918013888999', 'Kolkata', ''),
(7, 985954607, 'BRATATI BERA', '3', 'subhrajyoti_sd-3@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '+918013888999', 'Kolkata', ''),
(8, 985954608, 'NIVEDITA ROYCHOWDHURY', '4', 'subhrajyoti_sd-4@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '+918013888999', 'Kolkata', ''),
(9, 985954609, 'RANAJIT SAHA', '5', 'subhrajyoti_sd-5@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '+918013888999', 'Kolkata', ''),
(10, 985954610, 'SOURAV GHOSH', '6', 'subhrajyoti_sd-6@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '+918013888999', 'Kolkata', ''),
(11, 985954611, 'POOJA GUPTA', '7', 'subhrajyoti_sd-7@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '+918013888999', 'Kolkata', ''),
(12, 985954612, 'ARINDAM CHATTERJEE', '8', 'subhrajyoti_sd-8@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '+918013888999', 'Kolkata', ''),
(13, 985954613, 'KOUSTAV MAITRA', '9', 'subhrajyoti_sd-9@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '+918013888999', 'Kolkata', ''),
(14, 985954614, 'NILADRI LAHIRY', '10', 'subhrajyoti_sd-10@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '+918013888999', 'Kolkata', ''),
(15, 985954615, 'ABHIJIT GHOSH', '11', 'subhrajyoti_sd-11@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '+918013888999', 'Kolkata', ''),
(16, 985954616, 'NILABHRO DATTA', '12', 'subhrajyoti_sd-12@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '+918013888999', 'Kolkata', ''),
(17, 985954617, 'SRIMAN SHARANYA SARKAR', '13', 'subhrajyoti_sd-13@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '+918013888999', 'Kolkata', ''),
(18, 985954618, 'SRITAM HAZRA', '14', 'subhrajyoti_sd-14@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '+918013888999', 'Kolkata', ''),
(19, 985954619, 'ANKITA SINGH', '15', 'subhrajyoti_sd-15@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '+918013888999', 'Kolkata', ''),
(20, 985954620, 'ASHES RANJAN NASKAR', '16', 'subhrajyoti_sd-16@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '+918013888999', 'Kolkata', ''),
(21, 985954621, 'SHATABDI MONDAL', '17', 'subhrajyoti_sd-17@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '+918013888999', 'Kolkata', ''),
(22, 985954622, 'SHRAMANA THAKUR', '18', 'subhrajyoti_sd-18@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '+918013888999', 'Kolkata', ''),
(23, 985954623, 'SANCHARI DAS', '19', 'subhrajyoti_sd-19@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '+918013888999', 'Kolkata', ''),
(24, 985954624, 'NITESH KUMAR JHA', '20', 'subhrajyoti_sd-20@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '+918013888999', 'Kolkata', ''),
(25, 985954625, 'PRASUN CHAKRABORTY', '21', 'subhrajyoti_sd-21@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '+918013888999', 'Kolkata', ''),
(26, 985954626, 'CHANDAN ROY', '22', 'subhrajyoti_sd-22@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '+918013888999', 'Kolkata', ''),
(27, 985954627, 'DEBENDRA NATH RANA', '23', 'subhrajyoti_sd-23@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '+918013888999', 'Kolkata', ''),
(28, 985954628, 'ABDUL AZIZ', '24', 'subhrajyoti_sd-24@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '+918013888999', 'Kolkata', ''),
(29, 985954629, 'YOGESH AGARWAL', '25', 'arnabtech1-25@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '+918013888999', 'Kolkata', ''),
(30, 985954630, 'ARIJIT DAS', '26', 'arnabtech1-26@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '+918013635767', 'Kolkata', ''),
(31, 985954631, 'AVIK GUHA', '27', 'arnabtech1-27@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '+918013635767', 'Kolkata', ''),
(32, 985954632, 'SOMNATH MUKHERJEE', '28', 'arnabtech1-28@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '+918013635767', 'Kolkata', ''),
(33, 985954633, 'RUCHIRA DE', '29', 'arnabtech1-29@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '+918013635767', 'Kolkata', ''),
(34, 985954634, 'POULAMI BAL', '30', 'arnabtech1-30@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '+918013635767', 'Kolkata', ''),
(35, 985954635, 'ANKITA SARKAR', '31', 'arnabtech1-31@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '+918013635767', 'Kolkata', ''),
(36, 985954636, 'AVIK CHATTOPADHYAY', '32', 'arnabtech1-32@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '+918013635767', 'Kolkata', ''),
(37, 985954637, 'SUBHRAJYOTI SANTRA', '33', 'arnabtech1-33@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '+918013635767', 'Kolkata', ''),
(38, 985954638, 'LOPAMUDRA BANERJEE', '34', 'arnabtech1-34@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '+918013635767', 'Kolkata', ''),
(39, 985954639, 'ANINDITA GHOSH', '35', 'arnabtech1-35@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '+918013635767', 'Kolkata', ''),
(40, 985954640, 'TAMOJIT BISWAS', '36', 'arnabtech1-36@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '+918013635767', 'Kolkata', ''),
(41, 985954641, 'SHWETA GHOSH', '37', 'arnabtech1-37@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '+918013635767', 'Kolkata', ''),
(42, 985954642, 'RUMPA SADHUKHAN', '38', 'arnabtech1-38@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '+918013635767', 'Kolkata', ''),
(43, 985954643, 'ANJISHNU MONDAL', '39', 'arnabtech1-39@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '+918013635767', 'Kolkata', ''),
(44, 985954644, 'ANUJA NATH', '40', 'arnabtech1-40@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '+918013635767', 'Kolkata', ''),
(45, 985954645, 'SUMANA SUR', '41', 'arnabtech1-41@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '+918013635767', 'Kolkata', ''),
(46, 985954646, 'SAYAK DAS', '42', 'arnabtech1-42@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '+918013635767', 'Kolkata', ''),
(47, 985954647, 'GUNJAN SEKHON', '43', 'arnabtech1-43@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '+918013635767', 'Kolkata', ''),
(48, 985954648, 'SHAMIM AKTAR', '44', 'arnabtech1-44@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '+918013635767', 'Kolkata', ''),
(49, 985954649, 'DEBARGHYA MUKHERJEE', '45', 'arnabtech1-45@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '+918013635767', 'Kolkata', ''),
(50, 985954650, 'RUHIDAS ROY', '46', 'arnabtech1-46@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '+918013635767', 'Kolkata', ''),
(51, 985954651, 'JUHI BAROI', '47', 'arnabtech1-47@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '+918013635767', 'Kolkata', ''),
(52, 985954652, 'PRIYA BHAKAT', '48', 'arnabtech1-48@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '+918013635767', 'Kolkata', ''),
(53, 985954653, 'ARNAB KOLEY', '49', 'arnabtech1-49@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '+918013635767', 'Kolkata', ''),
(54, 985954654, 'SHIVAM DAS', '50', 'arnabtech1-50@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '+918013635767', 'Kolkata', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
