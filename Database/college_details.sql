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
-- Table structure for table `college_details`
--

CREATE TABLE IF NOT EXISTS `college_details` (
  `college_cuid` int(7) NOT NULL,
  `college_name` varchar(60) NOT NULL,
  `clgtype` varchar(20) NOT NULL,
  `university_name` varchar(50) NOT NULL,
  `location_address` text NOT NULL,
  `intake` int(3) NOT NULL,
  `seat1` int(3) NOT NULL,
  `seat2` int(11) NOT NULL,
  `phone1` varchar(20) NOT NULL,
  `phone2` varchar(20) NOT NULL,
  `website` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  PRIMARY KEY (`college_cuid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college_details`
--

INSERT INTO `college_details` (`college_cuid`, `college_name`, `clgtype`, `university_name`, `location_address`, `intake`, `seat1`, `seat2`, `phone1`, `phone2`, `website`, `email`) VALUES
(1, 'BENGAL COLLEGE OF ENGINEERING & TECHNOLOGY ', 'self', 'West Bengal University of Technology', 'SAHID SUKUMAR BANERJEE SARANI, BIDHAN NAGAR, DURGAPUR - 713 212, DIST. BURDWAN, WEST BENGAL', 4, 4, 4, '2147483648', '2147483648', 'www.bcetdgp.ac.in', 'admission@sksgi.com'),
(2, 'TECHNO INDIA - HOOGHLY', 'self', 'West Bengal University of Technology', 'DHARAMPUR, SHANTINIKETAN ON G.T. ROAD, CHINSURAH, HOOGHLY', 4, 4, 4, '2147483649', '0', 'www.technoindiahooghly.org', 'info@technoinfdiahooghly.org'),
(3, 'COMPUTER APPLICATION CENTRE, HERITAGE INSTITUTE OF TECHNOLOG', 'self', 'West Bengal University of Technology', '994, MADURDAHA, CHOWBAGA ROAD, ANANDAPUR, P.O. EAST KOLKATA TOWNSHIP', 4, 4, 4, '2147483647', '0', 'www.heritageit.edu', 'info@heritageit.edu'),
(4, 'INSTITUTE OF SCIENCE AND TECHNOLOGY', 'self', 'West Bengal University of Technology', 'DHURABILA, DHAMKURIA, CHANDRAKONA TOWN, PASCHIM MEDINIPUR', 4, 4, 4, '2147483647', '123456', 'istonline.org.in', 'admission@istonline.org.in'),
(5, 'PAILAN COLLEGE OF MANAGEMENT & TECHNOLOGY', 'self', 'West Bengal University of Technology', 'BENGAL PAILAN PARK, PHASE I, AMGACHIA ROAD, JOKA (OFF DIAMOND HOURBOUR ROAD), KOLKATA - 700 104', 4, 4, 4, '2147483647', '0', 'www.pcmt-india.net', 'pcmt@pcmt-india.net'),
(6, 'TECHNO INDIA', 'self', 'West Bengal University of Technology', 'EM - 4/1, SECTO - V, SALT LAKE, KOLKATA - 91', 4, 4, 4, '2147483647', '0', 'www.ticollege.ac.in', 'admission@technoindiagroup.com'),
(7, 'BENGAL INSTITUTE OF TECHNOLOGY', 'self', 'West Bengal University of Technology', 'BAMUNGHATA, ON BASANTI HIGHWAY, KOLKATA - 700 150', 4, 4, 4, '2147483647', '0', 'www.bitcollege.org', 'admission@technoindiagroup.com'),
(8, 'DSMS BUSINESS SCHOOL', 'self', 'West Bengal University of Technology', 'SHAHID SUKUMAR BANERJEE SARANI, BIDHANNAGAR', 4, 4, 4, '2147483647', '0', 'www.dsmsindia.com', 'admission@dsmsindia.com'),
(9, 'NARULA INSTITUTE OF TECHNOLOGY', 'self', 'West Bengal University of Technology', '81 NILGUNJ ROAD, AGARPARA, KOLKATA - 109 ', 4, 4, 4, '2147483647', '0', 'www.nit.ac.in', 'principal_nit@jisgroup.org'),
(10, 'RCC INSTITUTE OF INFORMATION TECHNOLOGY', 'semi_govt', 'West Bengal University of Technology', 'CANAL SOUTH ROAD, BELIAGHATA, KOLKATA - 700015,WEST BENGAL', 4, 4, 4, '2147483647', '0', 'www.rcciit.in', 'admission@rcciit.in'),
(11, 'HALDIA INSTITUTE OF TECHNOLOGY', 'self', 'West Bengal University of Technology', 'ICARE COMPLEX, HIT CAMPUS', 4, 4, 4, '2147483647', '0', 'www.hithaldia.in', 'admin@hithaldia.in'),
(12, 'SABITA DEVI EDUCATION TRUST - BRAINWARE GROUP OF INSTITUTION', 'self', 'West Bengal University of Technology', '398 RAMKRISHNAPUR ROAD, P.S. BARASAT', 4, 4, 4, '2147483647', '0', 'www.brainwaretechnologies.org', 'nfo@brainwaretechnologies.org'),
(13, 'NETAJI SUBHASH ENGINEERING COLLEGE', 'self', 'West Bengal University of Technology', 'TECHNO CITY, GARIA, KOLKATA - 152', 4, 4, 4, '2147483647', '0', 'www.nsecollege.org', 'director_nsec@yahoo.com'),
(14, 'DR. B. C. ROY ENGINEERING COLLEGE, DURGAPUR', 'self', 'West Bengal University of Technology', 'JEMUA ROAD, FULJHORE, DURGAPUR - 713 206', 4, 4, 4, '2147483647', '0', 'www.bcrec.ac.in', 'info@bcrec.ac.in'),
(15, 'BANKURA UNNAYANI INSTITUTE OF ENGINEERING', 'self', 'West Bengal University of Technology', 'AT : POHABAGAN, BHAGABANDH', 4, 4, 4, '2147483647', '0', 'www.buieonline.info', 'buie@in.com'),
(16, 'FUTURE INSTITUTE OF ENGINEERING AND MANAGEMENT', 'self', 'West Bengal University of Technology', 'SONARPUR STATION ROAD, DIST.  SOUTH 24 PRGS, KOLKATA', 4, 4, 4, '2147483647', '2147483647', 'www.futureengineering.in', 'info@futureengineering.in'),
(17, 'CAMELLIA INSTITUTE OF TECHNOLOGY', 'self', 'West Bengal University of Technology', 'DIGBERIA, BADU ROAD, MADHYAMGRAM, KOLKATA - 700 129', 4, 4, 4, '2147483647', '0', 'www.camelliait.ac.in', 'director@camelliait.ac.in'),
(18, 'TECHNO INDIA COLLEGE OF TECHNOLOGY', 'self', 'West Bengal University of Technology', 'MEGA CITY, NEW TOWN, KOLKATA', 4, 4, 4, '2147483647', '0', 'www.tictcollege.in', 'info@tictcollege.in'),
(19, 'REGENT EDUCATION & RESEARCH FOUNDATION GROUP  OF INSTITUTION', 'self', 'West Bengal University of Technology', 'BARA KANTHALIA, P.O: SEWLI TELINI PARA, P.S.: TITAGARH, NORTH 24 PARGANAS', 4, 4, 4, '2147483647', '0', 'www.rerf.in', 'rerfkolkata@gmail.com'),
(20, 'SEACOM ENGINEERING COLLEGE', 'self', 'West Bengal University of Technology', 'JALADHULAGOR, SANKRAIL, PO: ANDUL MOUR, HOWRAH-711302', 4, 4, 4, '2147483647', '2147483647', 'www.seacomengineering.org', 'principal@seacomengineering.org'),
(21, 'ACADEMY OF TECHNOLOGY', 'self', 'West Bengal University of Technology', 'G.T. ROAD, ADISAPTAGRAM, P.O: AEDCONAGAR, DIST-HOOGHLY, WEST BENGAL', 4, 4, 4, '2147483647', '0', 'www.aot.edu.in', 'academy@aot.edu.in'),
(22, 'ASANSOL ENGINEERING COLLEGE', 'self', 'West Bengal University of Technology', 'VIVEKANANDA SARANI, KANYAPUR', 4, 4, 4, '2147483647', '0', 'www.aecwb.net', 'aec@aecwb.edu.in'),
(23, 'GURUNANAK INSTITUTE OF TECHNOLOGY', 'self', 'West Bengal University of Technology', '157/F, NILGUNJ ROAD, PANIHATI, SODEPUR, KOLKATA-700114', 4, 4, 4, '2147483647', '0', 'www.gnit.ac.in', 'info@jisgroup.org'),
(24, 'B.P. PODDAR INSTITUTE OF MANAGEMENT & TECHNOLOGY', 'self', 'West Bengal University of Technology', '137, V.I.P. ROAD, KOLKATA - 700052', 4, 4, 4, '2147483647', '0', 'www.bppimt.ac.in', 'info@bppimt.ac.in'),
(25, 'MEGHNAD SAHA INSTITUTE OF TECHNOLOGY', 'self', 'West Bengal University of Technology', 'TECHNO COMPLEX, MADURDAHA, BESIDE NRI COMPLEX, UCHHEPOTA, KOLKATA-700150', 4, 4, 4, '2147483647', '0', 'www.msitcollege.org', 'info@msitcollege.org'),
(26, 'KALYANI GOVERNMENT ENGINEERING COLLEGE', 'self', 'West Bengal University of Technology', 'KALYANI UNIVERSITY CAMPUS KALYANI-741235, DIST. NADIA, WEST BENGAL, INDIA', 4, 4, 4, '2147483647', '0', 'www.kgec.edu.in', 'admission@kgec.edu.in'),
(27, 'MCKV INSTITUTE OF ENGINEERING', 'self', 'West Bengal University of Technology', '243, G.T. ROAD (NORTH)', 4, 4, 4, '2147483647', '2147483647', 'www.mckvie.edu.in', 'admission@mckvie.edu.in'),
(28, 'GREATER KOLKATA COLLEGE OF ENGINEERING & MANAGEMENT', 'self', 'West Bengal University of Technology', 'DUDHNAI, RAMNAGAR-II, P.S. BARUIPUR, 24 PARGANAS (SOUTH)', 4, 4, 4, '2147483647', '214748364', 'www.gkcem.ac.in', 'principal_gkcem@jisgroup.org'),
(29, 'SILIGURI INSTITUTE OF TECHNOLOGY', 'self', 'West Bengal University of Technology', 'HILL CART ROAD, SALBARI, SUKNA, SILIGURI, DARJEELING', 4, 4, 4, '2147483647', '2147483647', 'www.sittechno.org', 'sittechno@rediffmail.com'),
(30, 'CALCUTTA INSTITUTE OF TECHNOLOGY', 'self', 'West Bengal University of Technology', 'BANITABLA, ULUBERIA, HOWRAH - 711 316', 4, 4, 4, '2147483647', '2147483647', 'bciedu.org/colleges/cit.php', 'cit@bciedu.co.in'),
(31, 'JIS COLLEGE OF ENGINEERING', 'self', 'West Bengal University of Technology', 'BLOCK - A, PHASE - III, KALYANI, NADIA', 4, 4, 4, '2147483647', '2147483647', 'www.jiscollege.ac.in', 'info@jisgroup.org '),
(32, 'MANAGEMENT INSTITUTE OF DURGAPUR', 'self', 'West Bengal University of Technology', 'G.T. ROAD, RAJBANDH, DURGAPUR - 713 212, DIST. BURDWAN', 4, 4, 4, '2147483647', '2147483647', 'mid.rahul.ac.in', 'admission@rahul.ac.in '),
(33, 'ST. MARY''S TECHNICAL CAMPUS KOLKATA', 'self', 'West Bengal University of Technology', 'SAIBANA VILLAGE, OPP : WEST BENGAL STATE UNIVERSITY, ICHAPUR NILGUNGE GRAM PANCHAYAT, BARASAT, NORTH 24 PARGANAS DISTRICT, KOLKATA - 700 126', 4, 4, 4, '2147483647', '2147483647', 'www.stmarysgroup.com', 'admin@stmarysgroup.com'),
(34, 'Burdwan University', 'govt', 'University of Burdwan', 'Raiganj, Bardhaman, West Bengal 713101', 4, 4, 4, '2147483647', '0', 'www.buruniv.ac.in', 'admin@buruniv.ac.in'),
(35, 'Calcutta University', 'govt', 'Calcutta University', '87 /1, College St, Kolkata, West Bengal 700073', 4, 4, 4, '2147483647', '0', 'www.caluniv.ac.in', 'admin@caluniv.ac.in'),
(36, 'Jadavpur University', 'govt', 'Jadavpur University', 'Plot No.8, Salt Lake Bypass, LB Block, Sector III, Salt Lake City, Kolkata, West Bengal 700098', 4, 4, 4, '2147483647', '0', 'www.jaduniv.edu.in', 'admin@jaduniv.edu.in'),
(37, 'Kalyani University', 'govt', 'Kalyani University', 'Block C, University Of Kalyani, Kalyani, West Bengal 741245', 4, 4, 4, '2147483647', '0', 'www.klyuniv.ac.in', 'admin@klyuniv.ac.in'),
(38, 'North Bengal University', 'govt', 'North Bengal University', 'Post Raja Rammohanpur, Siliguri, Bairatisal, West Bengal 734013', 4, 4, 4, '2147483647', '0', 'www.nbu.ac.in', 'admin@nbu.ac.in'),
(39, 'Vidyasagar University', 'govt', 'Vidyasagar University', 'Vidyasagar University Rd, Rangamati, Medinipur, West Bengal 721102', 4, 4, 4, '2147483647', '0', 'www.vidyasagar.ac.in', 'admin@vidyasagar.ac.in');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
