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
-- Table structure for table `shine_hospital_doctor`
--

CREATE TABLE IF NOT EXISTS `shine_hospital_doctor` (
  `doctor_id` int(11) NOT NULL AUTO_INCREMENT,
  `doc_name` varchar(25) NOT NULL,
  `doc_address` text,
  `doc_phone` varchar(25) NOT NULL,
  `doc_profile` text,
  `doc_department_id` int(11) NOT NULL,
  `doc_image` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`doctor_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `shine_hospital_doctor`
--

INSERT INTO `shine_hospital_doctor` (`doctor_id`, `doc_name`, `doc_address`, `doc_phone`, `doc_profile`, `doc_department_id`, `doc_image`) VALUES
(2, 'Dr. Anant Kumar', 'Max Super Speciality Hospital, Saket\nMax Super Speciality Hospital, Vaishali', '(567) 237 6233', '    Professor and Head, Department of Urology & Renal Transplantation, Sanjay Gandhi Post Graduate Institute of Medical Sciences, Lucknow\n    Director , Department of Urology, Robotic and Kidney Transplantation, Fortis Group of Hospitals, Delhi and NCR\n    Senior Consultant, Urology and Transplantation, Indraprastha Apollo Hospital, New Delhi\n    Consultant Urologist, Addenbrooke''s NHS foundation, Cambridge, UK\n', 3, '2.jpg'),
(3, 'Dr. Alka Bhasin', 'Max Smart Super Specialty Hospital, Saket', '972-223662-082', '    Total years of experience till date: 15 years\n    SAKET CITY HOSPITAL, NEW DELHI August 2013 till date\n\n    MAX SUPERSPECIALTY HOSPITAL, SAKET November 2000 till August 2013 (HOD, Nephrology)\n\n    SIR GANGA RAM HOSPITAL, NEW DELHI 2000-2102 : Observer in Nephrology & Transplantation under guidance of Dr. D.S. Rana\n', 4, '3.jpg'),
(4, 'Dr. Geeta Buryok', 'Max Multi Speciality Centre, Pitampura', '9734363462', '    Slimming Manager at VLCC, from 1999 to 2001\n    Dietitian at St. Stephens Hospital, from 2001 to 2011\n    Working with Max Hospital, Pitampura, as Chief Clinical Nutritionist, since 2011 till date\n', 2, '4.jpg'),
(5, 'Prof. Anil Arora', 'Max Super Speciality Hospital, Patparganj', '635-6213223', 'Prof. Arora is an internationally known figure in Orthopaedics. He has been performing Joint Replacements from 1988, more than 25 years of experience in Joint Replacement. Teaching in medical college and training orthopaedic doctors, has provided him with vast surgical and clinical experience and expertise. He has wide-ranging skills in Knee and Hip Replacement surgeries. He is known for his sound clinical judgment and fine surgical skills. He was the first surgeon to start PINLESS Computer Navigated Total Knee Replacements in North India. He is regularly performing primary, complex and revision (Pinless Computer Navigated) Knee and Hip Replacement Surgeries. He is one of the very few surgeons of India, who can perform Autologus Chondrocyte Implantation (replacement of damaged cartilage by patient''s own cartilage, after culturing it in the medium).', 2, '5.jpg'),
(10, 'Dr. K. K. Talwar', 'Chairman - Cardiology, Max Healthcare\nMax Super Speciality Hospital, Saket', '534-623134', '    Clinical experience of more than 39 years\n    Director, Professor & Head of Department of Cardiology, Post Graduate Institute of Medical Education & Research, Chandigarh\n    Former Professor & Head, Department of Cardiology, AIIMS, New Delhi\n', 3, '10.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
