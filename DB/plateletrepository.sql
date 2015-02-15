-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2015 at 08:18 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `plateletrepository`
--
CREATE DATABASE IF NOT EXISTS `plateletrepository` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `plateletrepository`;

-- --------------------------------------------------------

--
-- Table structure for table `donordetails`
--

CREATE TABLE IF NOT EXISTS `donordetails` (
`Id` int(11) NOT NULL,
  `FirstName` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `LastName` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `BirthDate` date NOT NULL,
  `Gender` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `BloodGroup` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `PostCode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `LastDonatedDate` date NOT NULL,
  `RequestSentCount` int(11) NOT NULL,
  `PositiveResponseCount` int(11) NOT NULL,
  `ActualDonationCount` int(11) NOT NULL,
  `PositiveDonationRatio` decimal(10,0) NOT NULL,
  `ActualDonationRation` decimal(10,0) NOT NULL,
  `MobileNumber` varchar(1024) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Donor details';

-- --------------------------------------------------------

--
-- Table structure for table `hospitaldetails`
--

CREATE TABLE IF NOT EXISTS `hospitaldetails` (
`Id` int(11) NOT NULL,
  `Name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `Pincode` int(11) NOT NULL,
  `Mobile` int(11) NOT NULL,
  `Address` varchar(1024) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='hospital details';

-- --------------------------------------------------------

--
-- Table structure for table `postcodelookup`
--

CREATE TABLE IF NOT EXISTS `postcodelookup` (
  `postcode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `latitude` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `longitude` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE IF NOT EXISTS `request` (
`Id` int(11) NOT NULL,
  `UserLogin_Id` int(11) NOT NULL,
  `Date` date NOT NULL,
  `PinCode` int(11) NOT NULL,
  `BloodGrp` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `HospitalName` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `Status` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `SearchRadius` int(11) NOT NULL,
  `RecordCount` int(11) NOT NULL,
  `CreatedDateTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Request details';

-- --------------------------------------------------------

--
-- Table structure for table `requestfollowuplog`
--

CREATE TABLE IF NOT EXISTS `requestfollowuplog` (
`Id` int(11) NOT NULL,
  `Request_Id` int(11) NOT NULL,
  `Donor_Id` int(11) NOT NULL,
  `AwesomeFigure` decimal(10,0) NOT NULL,
  `SMSSent` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `SMSTime` datetime NOT NULL,
  `Status` varchar(128) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='request follow up log';

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE IF NOT EXISTS `userlogin` (
`Id` int(11) NOT NULL,
  `UserLoginName` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `Type` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `InActive` char(1) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Userlogin details of registered users';


--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`Id`, `UserLoginName`, `Password`, `Type`, `InActive`) VALUES
(1, 'admin@admin.com', 'admin', 'admin', 'Y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donordetails`
--
ALTER TABLE `donordetails`
 ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `hospitaldetails`
--
ALTER TABLE `hospitaldetails`
 ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
 ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `requestfollowuplog`
--
ALTER TABLE `requestfollowuplog`
 ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `userlogin`
--
ALTER TABLE `userlogin`
 ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donordetails`
--
ALTER TABLE `donordetails`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1;
--
-- AUTO_INCREMENT for table `hospitaldetails`
--
ALTER TABLE `hospitaldetails`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `requestfollowuplog`
--
ALTER TABLE `requestfollowuplog`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `userlogin`
--
ALTER TABLE `userlogin`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


CREATE TABLE IF NOT EXISTS  `ci_sessions` (
	session_id varchar(40) DEFAULT '0' NOT NULL,
	ip_address varchar(45) DEFAULT '0' NOT NULL,
	user_agent varchar(120) NOT NULL,
	last_activity int(10) unsigned DEFAULT 0 NOT NULL,
	user_data text NOT NULL,
	PRIMARY KEY (session_id),
	KEY `last_activity_idx` (`last_activity`)
);

CREATE TABLE IF NOT EXISTS `sms` (
`Id` int(11) NOT NULL,
  `RequestId` int(11) NOT NULL,
  `DonorId` int(11) NOT NULL,
  `SMSContent` varchar(2048) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `sms`
ADD PRIMARY KEY (`Id`);

ALTER TABLE `sms`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
