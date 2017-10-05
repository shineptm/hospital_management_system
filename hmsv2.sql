-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.21-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for shine_hospital_db
CREATE DATABASE IF NOT EXISTS `shine_hospital_db` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `shine_hospital_db`;

-- Dumping structure for table shine_hospital_db.shine_hospital_department
CREATE TABLE IF NOT EXISTS `shine_hospital_department` (
  `department_id` int(11) NOT NULL,
  `dept_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table shine_hospital_db.shine_hospital_department: ~4 rows (approximately)
/*!40000 ALTER TABLE `shine_hospital_department` DISABLE KEYS */;
INSERT INTO `shine_hospital_department` (`department_id`, `dept_name`) VALUES
	(1, ' Anesthesiology'),
	(2, 'Orthopaedic Surgery'),
	(3, 'Ophthalmology'),
	(4, 'Oncology');
/*!40000 ALTER TABLE `shine_hospital_department` ENABLE KEYS */;

-- Dumping structure for table shine_hospital_db.shine_hospital_doctor
CREATE TABLE IF NOT EXISTS `shine_hospital_doctor` (
  `doctor_id` int(11) NOT NULL AUTO_INCREMENT,
  `doc_name` varchar(25) NOT NULL,
  `doc_address` text,
  `doc_phone` varchar(25) NOT NULL,
  `doc_profile` text,
  `doc_department_id` int(11) NOT NULL,
  `doc_image` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`doctor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table shine_hospital_db.shine_hospital_doctor: ~5 rows (approximately)
/*!40000 ALTER TABLE `shine_hospital_doctor` DISABLE KEYS */;
INSERT INTO `shine_hospital_doctor` (`doctor_id`, `doc_name`, `doc_address`, `doc_phone`, `doc_profile`, `doc_department_id`, `doc_image`) VALUES
	(1, 'Dr. Anurag Krishna', 'Max Multi Speciality Centre, Pitampura\nMax Smart Super Specialty Hospital, Saket', '892- 74654', 'Over 30 years experience, initially as faculty at the University College of Medical Sciences, University of Delhi\nLater was Chairman, Department of Paediatric Surgery, Sir Ganga Ram Hospital.\nJoined Max Healthcare Institute in Jan 2009 as Director, Paediatrics and Paediatric Surgery', 2, '1.jpg'),
	(2, 'Dr. Anant Kumar', 'Max Super Speciality Hospital, Saket\nMax Super Speciality Hospital, Vaishali', '(567) 237 6233', '    Professor and Head, Department of Urology & Renal Transplantation, Sanjay Gandhi Post Graduate Institute of Medical Sciences, Lucknow\n    Director , Department of Urology, Robotic and Kidney Transplantation, Fortis Group of Hospitals, Delhi and NCR\n    Senior Consultant, Urology and Transplantation, Indraprastha Apollo Hospital, New Delhi\n    Consultant Urologist, Addenbrooke\'s NHS foundation, Cambridge, UK\n', 3, '2.jpg'),
	(3, 'Dr. Alka Bhasin', 'Max Smart Super Specialty Hospital, Saket', '972-223662-082', '    Total years of experience till date: 15 years\n    SAKET CITY HOSPITAL, NEW DELHI August 2013 till date\n\n    MAX SUPERSPECIALTY HOSPITAL, SAKET November 2000 till August 2013 (HOD, Nephrology)\n\n    SIR GANGA RAM HOSPITAL, NEW DELHI 2000-2102 : Observer in Nephrology & Transplantation under guidance of Dr. D.S. Rana\n', 4, '3.jpg'),
	(4, 'Dr. Geeta Buryok', 'Max Multi Speciality Centre, Pitampura', '9734363462', '    Slimming Manager at VLCC, from 1999 to 2001\n    Dietitian at St. Stephens Hospital, from 2001 to 2011\n    Working with Max Hospital, Pitampura, as Chief Clinical Nutritionist, since 2011 till date\n', 2, '4.jpg'),
	(5, 'Prof. Anil Arora', 'Max Super Speciality Hospital, Patparganj', '635-6213223', 'Prof. Arora is an internationally known figure in Orthopaedics. He has been performing Joint Replacements from 1988, more than 25 years of experience in Joint Replacement. Teaching in medical college and training orthopaedic doctors, has provided him with vast surgical and clinical experience and expertise. He has wide-ranging skills in Knee and Hip Replacement surgeries. He is known for his sound clinical judgment and fine surgical skills. He was the first surgeon to start PINLESS Computer Navigated Total Knee Replacements in North India. He is regularly performing primary, complex and revision (Pinless Computer Navigated) Knee and Hip Replacement Surgeries. He is one of the very few surgeons of India, who can perform Autologus Chondrocyte Implantation (replacement of damaged cartilage by patient\'s own cartilage, after culturing it in the medium).', 2, '5.jpg');
/*!40000 ALTER TABLE `shine_hospital_doctor` ENABLE KEYS */;

-- Dumping structure for table shine_hospital_db.shine_hospital_users
CREATE TABLE IF NOT EXISTS `shine_hospital_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(50) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `type` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table shine_hospital_db.shine_hospital_users: ~6 rows (approximately)
/*!40000 ALTER TABLE `shine_hospital_users` DISABLE KEYS */;
INSERT INTO `shine_hospital_users` (`id`, `username`, `password`, `email`, `uname`, `type`) VALUES
	(1, 'shine', 'shine', 'shineptm@gmail.com', 'Shine Pathanapuram', 0),
	(2, 'rahul123', 'rahulabc', 'rahul@gmail.com', 'Rahul Ravi', NULL),
	(3, 'jose123', 'jose', 'jose@gmail.com', 'Joseph', NULL),
	(4, 'mahesh123', 'mahesh', 'mahesh@gmail.com', 'Mahesh Raj', NULL),
	(5, 'jerinsam', 'jerin123', 'jerin@gmail.com', 'Jerin Samuel', NULL),
	(6, 'santhosh', 'san123', 'santhosh@gmail.com', 'Santhosh Sivan', NULL);
/*!40000 ALTER TABLE `shine_hospital_users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
