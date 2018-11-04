
-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 19, 2014 at 09:45 AM
-- Server version: 5.1.57
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `a1393332_ecounse`
--

-- --------------------------------------------------------

--
-- Table structure for table `college_login`
--

CREATE TABLE `college_login` (
  `college_id` varchar(30) NOT NULL,
  `clg_uid` varchar(255) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `last_login` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college_login`
--

INSERT INTO `college_login` VALUES('1', 'bcoet_1', 'admission@sksgi.com', '827ccb0eea8a706c4c34a16891f84e7b', 'April 20, 2014, 9:39 pm IST');
INSERT INTO `college_login` VALUES('2', 'ti-h_2', 'info@technoinfdiahooghly.org', '827ccb0eea8a706c4c34a16891f84e7b', 'April 20, 2014, 9:41 pm IST');
INSERT INTO `college_login` VALUES('3', 'cachiot_3', 'info@heritageit.edu', '827ccb0eea8a706c4c34a16891f84e7b', 'April 20, 2014, 1:57 pm IST');
INSERT INTO `college_login` VALUES('4', 'iosat_4', 'admission@istonline.org.in', '827ccb0eea8a706c4c34a16891f84e7b', '');
INSERT INTO `college_login` VALUES('5', 'pcomt_5', 'pcmt@pcmt-india.net', '827ccb0eea8a706c4c34a16891f84e7b', '');
INSERT INTO `college_login` VALUES('6', 'ti_6', 'admission@technoindiagroup.com', '827ccb0eea8a706c4c34a16891f84e7b', 'May 19, 2014, 6:56 pm IST');
INSERT INTO `college_login` VALUES('7', 'biot_7', 'admission@technoindiagroup.com', '827ccb0eea8a706c4c34a16891f84e7b', 'May 19, 2014, 6:56 pm IST');
INSERT INTO `college_login` VALUES('8', 'dbs_8', 'admission@dsmsindia.com', '827ccb0eea8a706c4c34a16891f84e7b', '');
INSERT INTO `college_login` VALUES('9', 'niot_9', 'principal_nit@jisgroup.org', '827ccb0eea8a706c4c34a16891f84e7b', '');
INSERT INTO `college_login` VALUES('10', 'rioit_10', 'admission@rcciit.in', '827ccb0eea8a706c4c34a16891f84e7b', '');
INSERT INTO `college_login` VALUES('11', 'hiot_11', 'admin@hithaldia.in', '827ccb0eea8a706c4c34a16891f84e7b', '');
INSERT INTO `college_login` VALUES('12', 'sdet-bgoi_12', 'nfo@brainwaretechnologies.org', '827ccb0eea8a706c4c34a16891f84e7b', '');
INSERT INTO `college_login` VALUES('13', 'nsec_13', 'director_nsec@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '');
INSERT INTO `college_login` VALUES('14', 'dbcrecd_14', 'info@bcrec.ac.in', '827ccb0eea8a706c4c34a16891f84e7b', '');
INSERT INTO `college_login` VALUES('15', 'buioe_15', 'buie@in.com', '827ccb0eea8a706c4c34a16891f84e7b', '');
INSERT INTO `college_login` VALUES('16', 'fioeam_16', 'info@futureengineering.in', '827ccb0eea8a706c4c34a16891f84e7b', '');
INSERT INTO `college_login` VALUES('17', 'ciot_17', 'director@camelliait.ac.in', '827ccb0eea8a706c4c34a16891f84e7b', '');
INSERT INTO `college_login` VALUES('18', 'ticot_18', 'info@tictcollege.in', '827ccb0eea8a706c4c34a16891f84e7b', '');
INSERT INTO `college_login` VALUES('19', 'rerfgoi_19', 'rerfkolkata@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '');
INSERT INTO `college_login` VALUES('20', 'sec_20', 'principal@seacomengineering.or', '827ccb0eea8a706c4c34a16891f84e7b', '');
INSERT INTO `college_login` VALUES('21', 'aot_21', 'academy@aot.edu.in', '827ccb0eea8a706c4c34a16891f84e7b', '');
INSERT INTO `college_login` VALUES('22', 'aec_22', 'aec@aecwb.edu.in', '827ccb0eea8a706c4c34a16891f84e7b', '');
INSERT INTO `college_login` VALUES('23', 'giot_23', 'info@jisgroup.org', '827ccb0eea8a706c4c34a16891f84e7b', '');
INSERT INTO `college_login` VALUES('24', 'bpiomt_24', 'info@bppimt.ac.in', '827ccb0eea8a706c4c34a16891f84e7b', '');
INSERT INTO `college_login` VALUES('25', 'msiot_25', 'info@msitcollege.org', '827ccb0eea8a706c4c34a16891f84e7b', '');
INSERT INTO `college_login` VALUES('26', 'kgec_26', 'admission@kgec.edu.in', '827ccb0eea8a706c4c34a16891f84e7b', '');
INSERT INTO `college_login` VALUES('27', 'mioe_27', 'admission@mckvie.edu.in', '827ccb0eea8a706c4c34a16891f84e7b', '');
INSERT INTO `college_login` VALUES('28', 'gkcoem_28', 'principal_gkcem@jisgroup.org', '827ccb0eea8a706c4c34a16891f84e7b', '');
INSERT INTO `college_login` VALUES('29', 'siot_29', 'sittechno@rediffmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '');
INSERT INTO `college_login` VALUES('30', 'ciot_30', 'cit@bciedu.co.in', '827ccb0eea8a706c4c34a16891f84e7b', '');
INSERT INTO `college_login` VALUES('31', 'jcoe_31', 'info@jisgroup.org ', '827ccb0eea8a706c4c34a16891f84e7b', '');
INSERT INTO `college_login` VALUES('32', 'miod_32', 'admission@rahul.ac.in ', '827ccb0eea8a706c4c34a16891f84e7b', '');
INSERT INTO `college_login` VALUES('33', 'smtck_33', 'admin@stmarysgroup.com', '827ccb0eea8a706c4c34a16891f84e7b', '');
INSERT INTO `college_login` VALUES('34', 'bu_34', 'admin@buruniv.ac.in', '827ccb0eea8a706c4c34a16891f84e7b', '');
INSERT INTO `college_login` VALUES('35', 'cu_35', 'admin@caluniv.ac.in', '827ccb0eea8a706c4c34a16891f84e7b', '');
INSERT INTO `college_login` VALUES('36', 'ju_36', 'admin@jaduniv.edu.in', '827ccb0eea8a706c4c34a16891f84e7b', '');
INSERT INTO `college_login` VALUES('37', 'ku_37', 'admin@klyuniv.ac.in', '827ccb0eea8a706c4c34a16891f84e7b', '');
INSERT INTO `college_login` VALUES('38', 'nbu_38', 'admin@nbu.ac.in', '827ccb0eea8a706c4c34a16891f84e7b', '');
INSERT INTO `college_login` VALUES('39', 'vu_39', 'admin@vidyasagar.ac.in', '827ccb0eea8a706c4c34a16891f84e7b', '');
