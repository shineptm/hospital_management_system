-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 10, 2017 at 02:12 PM
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
-- Table structure for table `shine_hospital_payment`
--

CREATE TABLE IF NOT EXISTS `shine_hospital_payment` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `payment_invoice_no` varchar(25) NOT NULL,
  `payment_invoice_date` date NOT NULL,
  `payment_invoice_due_date` date NOT NULL,
  `pay_patient_id` int(11) NOT NULL,
  `pay_doctor_id` int(11) NOT NULL,
  `pay_consult_charges` double DEFAULT NULL,
  `pay_pharmacy_charges` double DEFAULT NULL,
  `pay_lab_charges` double DEFAULT NULL,
  `pay_xray_charges` double DEFAULT NULL,
  `pay_room_charges` double DEFAULT NULL,
  `pay_other_charges` double DEFAULT NULL,
  `payment_total_amount` double DEFAULT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `shine_hospital_payment`
--

INSERT INTO `shine_hospital_payment` (`payment_id`, `payment_invoice_no`, `payment_invoice_date`, `payment_invoice_due_date`, `pay_patient_id`, `pay_doctor_id`, `pay_consult_charges`, `pay_pharmacy_charges`, `pay_lab_charges`, `pay_xray_charges`, `pay_room_charges`, `pay_other_charges`, `payment_total_amount`) VALUES
(1, 'INV00001', '2017-09-28', '2017-12-27', 7, 4, 450, 1000, 250, 0, 0, 150, 1850),
(2, 'INV00002', '2017-10-04', '2017-10-30', 8, 2, 590, 1200, 250, 3500, 2500, 150, 8190);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
