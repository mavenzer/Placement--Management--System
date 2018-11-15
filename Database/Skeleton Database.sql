-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 08, 2015 at 10:02 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `details`
--
CREATE DATABASE `details` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `details`;

-- --------------------------------------------------------

--
-- Table structure for table `addpdrive`
--

CREATE TABLE IF NOT EXISTS `addpdrive` (
  `CompanyName` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  `C/P` tinyint(1) NOT NULL DEFAULT '0',
  `PVenue` varchar(255) NOT NULL,
  `SSLC` float NOT NULL,
  `PU/Dip` float NOT NULL,
  `BE` float NOT NULL,
  `Backlogs` int(11) NOT NULL,
  `HofBacklogs` tinyint(1) NOT NULL,
  `DetainYears` int(11) NOT NULL,
  `ODetails` varchar(255) NOT NULL,
  PRIMARY KEY (`CompanyName`,`Date`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addpdrive`
--


-- --------------------------------------------------------

--
-- Table structure for table `basicdetails`
--

CREATE TABLE IF NOT EXISTS `basicdetails` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `FullName` varchar(255) NOT NULL,
  `USN` varchar(10) NOT NULL,
  `Mobile` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `Sem` int(11) NOT NULL,
  `Branch` varchar(15) NOT NULL,
  `SSLC` float NOT NULL,
  `PU/Dip` float NOT NULL,
  `BE` float NOT NULL,
  `Backlogs` int(11) NOT NULL,
  `HofBacklogs` tinyint(1) NOT NULL,
  `DetainYears` int(11) NOT NULL,
  `Approve` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Id`),
  UNIQUE KEY `USN` (`USN`,`Mobile`,`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `basicdetails`
--


-- --------------------------------------------------------

--
-- Table structure for table `updatedrive`
--

CREATE TABLE IF NOT EXISTS `updatedrive` (
  `USN` varchar(10) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `CompanyName` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  `Attendence` tinyint(1) NOT NULL DEFAULT '0',
  `WT` tinyint(1) NOT NULL DEFAULT '0',
  `GD` tinyint(1) NOT NULL DEFAULT '0',
  `Techical` tinyint(1) NOT NULL DEFAULT '0',
  `Placed` tinyint(1) NOT NULL DEFAULT '0',
  KEY `USN` (`USN`),
  KEY `CompanyName` (`CompanyName`,`Date`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `updatedrive`
--


--
-- Constraints for dumped tables
--

--
-- Constraints for table `updatedrive`
--
ALTER TABLE `updatedrive`
  ADD CONSTRAINT `updatedrive_ibfk_1` FOREIGN KEY (`USN`) REFERENCES `basicdetails` (`USN`) ON DELETE CASCADE,
  ADD CONSTRAINT `updatedrive_ibfk_2` FOREIGN KEY (`CompanyName`, `Date`) REFERENCES `addpdrive` (`CompanyName`, `Date`) ON DELETE CASCADE;
--
-- Database: `placement`
--
CREATE DATABASE `placement` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `placement`;

-- --------------------------------------------------------

--
-- Table structure for table `hlogin`
--

CREATE TABLE IF NOT EXISTS `hlogin` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Question` varchar(255) NOT NULL,
  `Answer` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Username` (`Username`,`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `hlogin`
--


-- --------------------------------------------------------

--
-- Table structure for table `plogin`
--

CREATE TABLE IF NOT EXISTS `plogin` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Question` varchar(255) NOT NULL,
  `Answer` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Username` (`Username`,`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `plogin`
--


-- --------------------------------------------------------

--
-- Table structure for table `prilogin`
--

CREATE TABLE IF NOT EXISTS `prilogin` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Question` varchar(255) NOT NULL,
  `Answer` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Username` (`Username`,`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `prilogin`
--


-- --------------------------------------------------------

--
-- Table structure for table `slogin`
--

CREATE TABLE IF NOT EXISTS `slogin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `USN` varchar(10) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Question` varchar(255) NOT NULL,
  `Answer` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `USN` (`USN`,`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `slogin`
--

