-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2015 at 01:52 AM
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

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `ip_address` varchar(45) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `user_agent` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Donor details';

--
-- Dumping data for table `donordetails`
--

INSERT INTO `donordetails` (`Id`, `FirstName`, `LastName`, `BirthDate`, `Gender`, `BloodGroup`, `PostCode`, `LastDonatedDate`, `RequestSentCount`, `PositiveResponseCount`, `ActualDonationCount`, `PositiveDonationRatio`, `ActualDonationRation`, `MobileNumber`) VALUES
(1, 'dfname1', 'dlname1', '1986-10-22', 'Male', 'A+', '400001', '2014-10-21', 0, 0, 0, '0', '0', '123456789'),
(2, 'dfname2', 'dlname2', '1962-01-07', 'Male', 'A-', '400001', '2014-08-24', 0, 0, 0, '0', '0', '123456789'),
(3, 'dfname3', 'dlname3', '1980-11-01', 'Male', 'B+', '400002', '2014-12-29', 0, 0, 0, '0', '0', '123456789'),
(4, 'dfname4', 'dlname4', '1968-12-06', 'Male', 'B-', '400002', '2014-11-28', 0, 0, 0, '0', '0', '123456789'),
(5, 'dfname5', 'dlname5', '1984-09-24', 'Male', 'AB+', '400004', '2014-05-23', 0, 0, 0, '0', '0', '123456789'),
(6, 'dfname6', 'dlname6', '1962-11-13', 'Male', 'AB-', '400007', '2015-01-26', 0, 0, 0, '0', '0', '123456789'),
(7, 'dfname7', 'dlname7', '1964-10-27', 'Male', 'O+', '400007', '2014-08-15', 0, 0, 0, '0', '0', '123456789'),
(8, 'dfname8', 'dlname8', '1987-10-26', 'Male', 'O-', '400007', '2014-05-03', 0, 0, 0, '0', '0', '123456789'),
(9, 'dfname9', 'dlname9', '1976-07-17', 'Male', 'A+', '400010', '2014-08-09', 0, 0, 0, '0', '0', '123456789'),
(10, 'dfname10', 'dlname10', '1990-01-02', 'Male', 'A-', '400005', '2014-08-07', 0, 0, 0, '0', '0', '123456789'),
(11, 'dfname11', 'dlname11', '1976-10-23', 'Male', 'B+', '400001', '2014-10-05', 0, 0, 0, '0', '0', '123456789'),
(12, 'dfname12', 'dlname12', '1974-09-16', 'Male', 'B-', '400002', '2014-09-12', 0, 0, 0, '0', '0', '123456789'),
(13, 'dfname13', 'dlname13', '1970-03-04', 'Male', 'AB+', '400003', '2014-11-13', 0, 0, 0, '0', '0', '123456789'),
(14, 'dfname14', 'dlname14', '1970-10-29', 'Male', 'AB-', '400004', '2014-08-18', 0, 0, 0, '0', '0', '123456789'),
(15, 'dfname15', 'dlname15', '1976-10-03', 'Male', 'O+', '400010', '2014-10-08', 0, 0, 0, '0', '0', '123456789'),
(16, 'dfname16', 'dlname16', '1984-08-04', 'Male', 'O-', '400012', '2015-01-29', 0, 0, 0, '0', '0', '123456789'),
(17, 'dfname17', 'dlname17', '1931-09-18', 'Male', 'A+', '400010', '2014-11-12', 0, 0, 0, '0', '0', '123456789'),
(18, 'dfname18', 'dlname18', '1999-07-16', 'Male', 'A-', '400001', '2014-05-03', 0, 0, 0, '0', '0', '123456789'),
(19, 'dfname19', 'dlname19', '1998-01-07', 'Male', 'B+', '400003', '2014-08-07', 0, 0, 0, '0', '0', '123456789'),
(20, 'dfname20', 'dlname20', '1937-04-18', 'Male', 'B-', '400004', '2014-04-21', 0, 0, 0, '0', '0', '123456789'),
(21, 'dfname21', 'dlname21', '1965-03-22', 'Male', 'AB+', '400604', '2014-04-10', 19, 10, 3, '53', '30', '123456789'),
(22, 'dfname22', 'dlname22', '1975-05-26', 'Male', 'AB-', '400605', '2014-07-21', 63, 20, 10, '32', '50', '123456789'),
(23, 'dfname23', 'dlname23', '1973-06-18', 'Female', 'O+', '400603', '2014-06-16', 14, 6, 1, '43', '17', '123456789'),
(24, 'dfname24', 'dlname24', '1990-05-24', 'Male', 'O-', '400080', '2014-09-14', 188, 50, 24, '27', '48', '123456789'),
(25, 'dfname25', 'dlname25', '1983-02-24', 'Male', 'A+', '400081', '2015-01-16', 121, 70, 30, '58', '43', '123456789'),
(26, 'dfname26', 'dlname26', '1959-10-14', 'Male', 'A-', '400082', '2014-06-08', 179, 28, 10, '16', '36', '123456789'),
(27, 'dfname27', 'dlname27', '1982-03-23', 'Male', 'B+', '400080', '2014-06-17', 61, 15, 9, '25', '60', '123456789'),
(28, 'dfname28', 'dlname28', '1962-10-19', 'Male', 'B-', '400605', '2014-04-16', 182, 47, 17, '26', '36', '123456789'),
(29, 'dfname29', 'dlname29', '1965-08-11', 'Male', 'AB+', '400605', '2015-01-04', 123, 28, 23, '23', '82', '123456789'),
(30, 'dfname30', 'dlname30', '1984-10-08', 'Male', 'AB-', '400081', '2014-08-12', 74, 44, 19, '59', '43', '123456789'),
(31, 'dfname31', 'dlname31', '1989-07-30', 'Male', 'O+', '400082', '2014-06-22', 84, 27, 4, '32', '15', '123456789'),
(32, 'dfname32', 'dlname32', '1968-01-07', 'Male', 'O-', '400080', '2014-04-06', 22, 22, 5, '100', '23', '123456789'),
(33, 'dfname33', 'dlname33', '1977-01-29', 'Male', 'A+', '400080', '2014-04-25', 18, 18, 2, '100', '11', '123456789'),
(34, 'dfname34', 'dlname34', '1988-04-29', 'Female', 'A-', '400082', '2014-06-25', 42, 21, 1, '50', '5', '123456789'),
(35, 'dfname35', 'dlname35', '1980-01-13', 'Male', 'B+', '400080', '2014-09-07', 14, 1, 1, '7', '100', '123456789'),
(36, 'dfname36', 'dlname36', '1980-01-18', 'Male', 'B-', '400082', '2015-01-27', 12, 2, 0, '17', '0', '123456789'),
(37, 'dfname37', 'dlname37', '1978-01-15', 'Male', 'AB+', '400603', '2014-12-19', 85, 43, 20, '51', '47', '123456789'),
(38, 'dfname38', 'dlname38', '1978-03-20', 'Male', 'AB-', '400604', '2014-09-14', 26, 5, 2, '19', '40', '123456789'),
(39, 'dfname39', 'dlname39', '1979-12-18', 'Male', 'O+', '400603', '2015-01-28', 56, 6, 5, '11', '83', '123456789'),
(40, 'dfname40', 'dlname40', '1978-02-04', 'Male', 'O-', '400604', '2014-05-21', 68, 45, 31, '66', '69', '123456789'),
(41, 'dfname41', 'dlname41', '1979-09-25', 'Male', 'A+', '400086', '2014-10-24', 146, 69, 39, '47', '57', '123456789'),
(42, 'dfname42', 'dlname42', '1978-08-13', 'Female', 'A-', '400087', '2015-01-27', 160, 90, 48, '56', '53', '123456789'),
(43, 'dfname43', 'dlname43', '1978-09-17', 'Male', 'B+', '400086', '2014-10-15', 90, 41, 5, '46', '12', '123456789'),
(44, 'dfname44', 'dlname44', '1991-05-14', 'Male', 'B-', '400087', '2014-05-21', 18, 7, 1, '39', '14', '123456789'),
(45, 'dfname45', 'dlname45', '1936-07-14', 'Male', 'AB+', '400086', '2014-12-12', 43, 8, 5, '19', '63', '123456789'),
(46, 'dfname46', 'dlname46', '2007-07-27', 'Male', 'AB-', '400087', '2014-11-22', 33, 5, 0, '15', '0', '123456789'),
(47, 'dfname47', 'dlname47', '1944-12-08', 'Male', 'O+', '400086', '2014-04-06', 48, 20, 6, '42', '30', '123456789'),
(48, 'dfname48', 'dlname48', '2008-04-02', 'Male', 'O-', '400087', '2014-06-26', 57, 16, 3, '28', '19', '123456789'),
(49, 'dfname49', 'dlname49', '2017-01-30', 'Male', 'A+', '400086', '2014-08-31', 146, 63, 22, '43', '35', '123456789'),
(50, 'dfname50', 'dlname50', '1942-12-17', 'Male', 'A-', '400087', '2014-08-24', 167, 25, 13, '15', '52', '123456789');

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

--
-- Dumping data for table `postcodelookup`
--

INSERT INTO `postcodelookup` (`postcode`, `latitude`, `longitude`) VALUES
('400001', '18.9385352', '72.836334'),
('400002', '18.948367', '72.825936'),
('400003', '18.9531926', '72.8353005'),
('400004', '18.9579877', '72.8214399'),
('400005', '18.9103689', '72.8197581'),
('400006', '18.9540855', '72.8004477'),
('400007', '18.9618411', '72.8133825'),
('400008', '18.9671396', '72.8286571'),
('400009', '18.9485731', '72.83174'),
('400010', '18.9701884', '72.8459619'),
('400011', '18.9810451', '72.8267579'),
('400012', '18.9954208', '72.8366115'),
('400013', '18.9981729', '72.8274691'),
('400014', '19.0147962', '72.8454534'),
('400015', '18.9960872', '72.8528356'),
('400016', '19.0389455', '72.8420546'),
('400017', '19.0455916', '72.8537063'),
('400018', '18.9985145', '72.8173545'),
('400019', '19.0269012', '72.8553773'),
('400020', '18.9351176', '72.8264378'),
('400604', '19.1988028', '72.9549149'),
('400605', '19.1943854', '72.9992013'),
('400603', '19.1834148', '72.9781047'),
('400080', '19.1720804', '72.948255'),
('400081', '19.1660696', '72.9645628'),
('400082', '19.1836782', '72.9426822');

-- --------------------------------------------------------

--
-- Table structure for table `postcodelookup2`
--

CREATE TABLE IF NOT EXISTS `postcodelookup2` (
  `postcode` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Table structure for table `sms`
--

CREATE TABLE IF NOT EXISTS `sms` (
`Id` int(11) NOT NULL,
  `RequestId` int(11) NOT NULL,
  `DonorId` int(11) NOT NULL,
  `SMSContent` varchar(2048) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Userlogin details of registered users';

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`Id`, `UserLoginName`, `Password`, `Type`, `InActive`) VALUES
(1, 'admin', 'admin', 'NGO', 'Y'),
(2, 'lilavati', 'lilavati', 'Hospital', 'Y'),
(3, 'mgm', 'mgm', 'Hospital', 'N'),
(4, 'dfname1', 'dfname1', 'Donor', 'Y'),
(5, 'dfname2', 'dfname2', 'Donor', 'Y'),
(6, 'dfname3', 'dfname3', 'Donor', 'Y'),
(7, 'dfname4', 'dfname4', 'Donor', 'Y'),
(8, 'dfname5', 'dfname5', 'Donor', 'Y'),
(9, 'dfname6', 'dfname6', 'Donor', 'Y'),
(10, 'dfname7', 'dfname7', 'Donor', 'Y'),
(11, 'dfname8', 'dfname8', 'Donor', 'Y'),
(12, 'dfname9', 'dfname9', 'Donor', 'Y'),
(13, 'dfname10', 'dfname10', 'Donor', 'Y'),
(14, 'dfname11', 'dfname11', 'Donor', 'Y'),
(15, 'dfname12', 'dfname12', 'Donor', 'Y'),
(16, 'dfname13', 'dfname13', 'Donor', 'Y'),
(17, 'dfname14', 'dfname14', 'Donor', 'Y'),
(18, 'dfname15', 'dfname15', 'Donor', 'Y'),
(19, 'dfname16', 'dfname16', 'Donor', 'Y'),
(20, 'dfname17', 'dfname17', 'Donor', 'Y'),
(21, 'dfname18', 'dfname18', 'Donor', 'Y'),
(22, 'dfname19', 'dfname19', 'Donor', 'Y'),
(23, 'dfname20', 'dfname20', 'Donor', 'Y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
 ADD PRIMARY KEY (`session_id`), ADD KEY `last_activity_idx` (`last_activity`);

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
-- Indexes for table `sms`
--
ALTER TABLE `sms`
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
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
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
-- AUTO_INCREMENT for table `sms`
--
ALTER TABLE `sms`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `userlogin`
--
ALTER TABLE `userlogin`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
