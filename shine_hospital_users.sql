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
-- Table structure for table `shine_hospital_users`
--

CREATE TABLE IF NOT EXISTS `shine_hospital_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(50) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `type` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `shine_hospital_users`
--

INSERT INTO `shine_hospital_users` (`id`, `username`, `password`, `email`, `uname`, `type`) VALUES
(1, 'shine', 'shine', 'shineptm@gmail.com', 'Shine Pathanapuram', 0),
(2, 'rahul123', 'rahulabc', 'rahul@gmail.com', 'Rahul Ravi', NULL),
(3, 'jose123', 'jose', 'jose@gmail.com', 'Joseph', NULL),
(4, 'mahesh123', 'mahesh', 'mahesh@gmail.com', 'Mahesh Raj', NULL),
(5, 'jerinsam', 'jerin123', 'jerin@gmail.com', 'Jerin Samuel', NULL),
(6, 'santhosh', 'san123', 'santhosh@gmail.com', 'Santhosh Sivan', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
