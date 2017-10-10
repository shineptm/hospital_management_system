-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 10, 2017 at 02:11 PM
-- Server version: 5.5.41-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `internship`
--

-- --------------------------------------------------------

--
-- Table structure for table `shine_hospital_patient`
--

CREATE TABLE IF NOT EXISTS `shine_hospital_patient` (
  `patient_id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_name` varchar(25) NOT NULL,
  `patient_address` text,
  `patient_dob` date DEFAULT NULL,
  `patient_gender` int(11) NOT NULL,
  `patient_profile` text,
  `patient_image` varchar(20) DEFAULT NULL,
  `patient_type` int(11) NOT NULL,
  PRIMARY KEY (`patient_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `shine_hospital_patient`
--

INSERT INTO `shine_hospital_patient` (`patient_id`, `patient_name`, `patient_address`, `patient_dob`, `patient_gender`, `patient_profile`, `patient_image`, `patient_type`) VALUES
(7, 'Genelia Dsouza', '                                                                                                                                                                                    No 5, Ramoji Apartment,\nPune\n689695                                                                                                                                                                ', '1980-08-15', 0, '                                                                                                                                                                                        Allergy Rhinitis                                                                                                                                                                ', '7.jpg', 0),
(8, 'Samuel Hans', 'No 5, Jewel Apartment,\nWorli, Mumbai\nMaharashtra', '2001-08-29', 1, 'Chronic obstructive pulmonary disease with acute exacerbation.\nAcute nasopharyngitis.', '8.jpg', 1),
(9, 'David Laiman', 'No 12, Oasis Cottage,\nPennsylvania,\n653282', '1990-05-25', 1, 'Pulmonary heart disease and diseases of pulmonary circulation.\nPulmonary embolism with mention of acute cor pulmonale\nAcute cor pulmonale NOS ', '9.jpg', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
