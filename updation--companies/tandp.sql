-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 24, 2015 at 02:07 AM
-- Server version: 5.5.44-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tandp`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `package` varchar(20) NOT NULL,
  `job_des` varchar(20) NOT NULL,
  `min_cgpa`  varchar(20) NOT NULl,
   
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`cid`, `name`, `package`,`job_des`,`min_cgpa`) VALUES
(1, 'Alfa Infinity', '23','Software Developer', '6.5' ),
(2, 'FitSqaure', '30', 'Networking Engg','7.0');


-- --------------------------------------------------------

--
-- Table structure for table `login_det`
--

CREATE TABLE IF NOT EXISTS `login_det` (
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_det`
--

INSERT INTO `login_det` (`username`, `password`) VALUES
('check', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `student_profile`
--

CREATE TABLE IF NOT EXISTS `student_profile` (
  `reg_num` varchar(20) NOT NULL,
  `f_name` varchar(20) NOT NULL,
  `l_name` varchar(20) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `tenth` varchar(20) NOT NULL,
  `twelfth` varchar(20) NOT NULL,
  `gap` varchar(20) NOT NULL,
  `cgpa` varchar(20) NOT NULL,
  `backlogs` varchar(20) NOT NULL,
  `cid` int(50) NOT NULL,
  PRIMARY KEY (`reg_num`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_profile`
--

INSERT INTO `student_profile` (`reg_num`, `f_name`, `l_name`, `branch`, `tenth`, `twelfth`, `gap`, `cgpa`, `backlogs`, `cid`) VALUES
('13BCB0001', 'Bhakti', 'Patel', 'SBST', '96', '93', '0', '8', '0', 1),
('13BCE0350', 'Amit', 'Rai', 'CS', '78', '98', '0', '9', '0', 2),
('13BCE0462', 'Rahul', 'Kar', 'CS', '89', '99', '4', '9', '0', 1),
('13BCE0762', 'Sathwasta', 'Golla', 'CS', '98', '93', '2', '8', '2', 2),
('13BEC0246', 'Harish', 'Karkal', 'ELE', '94', '92', '0', '0', '1', 2),
('13BIT0010', 'Aditya', 'Bharadwaj', 'IT', '89', '92', '1', '9', '1', 2),
('13BIT0200', 'Harshit', 'Misra', 'IT', '96', '95', '0', '1', '0', 1),
('13MSE0350', 'Anurag', 'Tiwari', 'MS', '95', '97', '0', '10', '0', 2),
('13MSE0393', 'Ravi', 'Gulati', 'MS', '89', '98', '0', '9', '0', 1),
('13SBT0506', 'Shreya', 'Tiwari', 'SBST', '85', '95', '0', '10', '0', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
