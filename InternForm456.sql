-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 21, 2019 at 01:44 PM
-- Server version: 5.7.25-0ubuntu0.18.04.2
-- PHP Version: 7.2.15-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `InternForm456`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_detail`
--

CREATE TABLE `admin_detail` (
  `USERNAME` varchar(20) NOT NULL DEFAULT '',
  `PASSWORD` varchar(20) DEFAULT NULL,
  `OTHER_ID` varchar(20) DEFAULT NULL,
  `PHOTO_AD` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_detail`
--

INSERT INTO `admin_detail` (`USERNAME`, `PASSWORD`, `OTHER_ID`, `PHOTO_AD`) VALUES
('admin', 'admin', 'empty', 'empty');

-- --------------------------------------------------------

--
-- Table structure for table `company_details`
--

CREATE TABLE `company_details` (
  `ID` varchar(14) NOT NULL DEFAULT '',
  `CO_NAME` varchar(32) DEFAULT NULL,
  `ADDRESS` varchar(50) DEFAULT NULL,
  `CITY` varchar(32) DEFAULT NULL,
  `POSTAL_CODE` varchar(10) DEFAULT NULL,
  `COUNTRY` varchar(32) DEFAULT NULL,
  `C_FIRST_NAME` varchar(20) DEFAULT NULL,
  `C_LAST_NAME` varchar(20) DEFAULT NULL,
  `C_POSITION` varchar(32) DEFAULT NULL,
  `TELEPHONE` varchar(14) DEFAULT NULL,
  `EMAIL` varchar(32) DEFAULT NULL,
  `FAX` varchar(14) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_details`
--

INSERT INTO `company_details` (`ID`, `CO_NAME`, `ADDRESS`, `CITY`, `POSTAL_CODE`, `COUNTRY`, `C_FIRST_NAME`, `C_LAST_NAME`, `C_POSITION`, `TELEPHONE`, `EMAIL`, `FAX`) VALUES
('0', 'Personal', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A'),
('45546321', 'Blah', 'Frog Street Park', 'sdf', '8546320', 'usa', 'sdaf', 'asdf', 'sdaf', '9874569874', 'hjzdsfjdfsj@dg.com', '8974653'),
('5003', 'Apple Inc', '1 Infinity loop', 'Palo Alto', '2345', 'India', 'John', 'Chen', 'HR-Manager', '495-3311', 'sergio@UOW.ca', '98759789'),
('5004', 'HP', 'Wall Street, New York', 'New York', '234234', 'USA', 'Janine', 'Labrune', 'HR-Manager', '98746354', 'labrune@hr.hp.com', '654655');

-- --------------------------------------------------------

--
-- Table structure for table `company_info`
--

CREATE TABLE `company_info` (
  `ID` varchar(14) NOT NULL DEFAULT '',
  `STUDENT_ID` varchar(14) DEFAULT NULL,
  `COMPANY_NAME` varchar(50) DEFAULT NULL,
  `START_DATE` varchar(12) DEFAULT NULL,
  `END_DATE` varchar(12) DEFAULT NULL,
  `ADDRESS` char(30) DEFAULT NULL,
  `TOTALHOURS` varchar(50) DEFAULT NULL,
  `CGTTYPE` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_info`
--

INSERT INTO `company_info` (`ID`, `STUDENT_ID`, `COMPANY_NAME`, `START_DATE`, `END_DATE`, `ADDRESS`, `TOTALHOURS`, `CGTTYPE`) VALUES
('00e74', 'test', '45546321', 'test', 'test', 'test', 'test', 'test'),
('0dfe0', '10203', 'Google', '12/1/2014', '-', 'GA', '12', 'WebProgramming'),
('5a241', '00000000', '5003', 'a', 'a', 'a', 'a', 'a'),
('7271a', '', '5003', 'asdf', 'asdf', 'asdf', 'adsf', 'asdf'),
('789fd', '', '45546321', 's', 'df', 'fds', 'sd', 'fds'),
('8f8db', '1003', 'Philips', '2013', '-', 'CA', '12', 'WebProgramming'),
('971fd', 't', '5003', 't', 't', 't', 't', 't'),
('a71cf', '2086', 'Google', '5-5-2015', '-', 'IN', '12', 'WebProgramming'),
('bd985', 'test', '45546321', 'test', 'test', 'test', 'test', 'test'),
('dcf00', 'a', '5003', 'a', 'a', 'a', 'a', 'a'),
('e8fe6', '1002', 'Samsung', '12-4-2014', 'NY', 'address', '12', 'WebProgramming'),
('eec93', '10054', 'EA Games', '20-2-2014', 'FL', 'address', '12', 'WebProgramming');

-- --------------------------------------------------------

--
-- Table structure for table `internship_form`
--

CREATE TABLE `internship_form` (
  `student_ID` int(11) NOT NULL,
  `super_user` varchar(50) NOT NULL,
  `super_pass` varchar(50) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `form_number` int(11) NOT NULL,
  `student_name` varchar(60) NOT NULL,
  `workInOffice` varchar(30) DEFAULT NULL,
  `fiveActivies` varchar(500) DEFAULT NULL,
  `relevantWork` varchar(1) DEFAULT NULL,
  `difficulties` varchar(500) DEFAULT NULL,
  `workExpRelation` varchar(500) DEFAULT NULL,
  `wantToLearn` varchar(500) DEFAULT NULL,
  `changedYourMind` varchar(500) DEFAULT NULL,
  `providedContacts` varchar(1) DEFAULT NULL,
  `internshipRating` varchar(500) DEFAULT NULL,
  `startDate` date DEFAULT NULL,
  `endDate` date DEFAULT NULL,
  `internshipAddress` varchar(500) DEFAULT NULL,
  `hoursWorked` int(10) DEFAULT NULL,
  `cgtIndustry` varchar(30) DEFAULT NULL,
  `performsDependable` int(1) DEFAULT NULL,
  `cooperatesWell` int(1) DEFAULT NULL,
  `showsInterest` int(1) DEFAULT NULL,
  `learnsQuickly` int(1) DEFAULT NULL,
  `showsInitiative` int(1) DEFAULT NULL,
  `producesHighQuality` int(1) DEFAULT NULL,
  `acceptsResponsibility` int(1) DEFAULT NULL,
  `acceptsCriticism` int(1) DEFAULT NULL,
  `demonstratesOrgSkills` int(1) DEFAULT NULL,
  `demonstratesTechKnowledge` int(1) DEFAULT NULL,
  `showsGoodJudgement` int(1) DEFAULT NULL,
  `advisorApproved` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `internship_form`
--

INSERT INTO `internship_form` (`student_ID`, `super_user`, `super_pass`, `company_name`, `form_number`, `student_name`, `workInOffice`, `fiveActivies`, `relevantWork`, `difficulties`, `workExpRelation`, `wantToLearn`, `changedYourMind`, `providedContacts`, `internshipRating`, `startDate`, `endDate`, `internshipAddress`, `hoursWorked`, `cgtIndustry`, `performsDependable`, `cooperatesWell`, `showsInterest`, `learnsQuickly`, `showsInitiative`, `producesHighQuality`, `acceptsResponsibility`, `acceptsCriticism`, `demonstratesOrgSkills`, `demonstratesTechKnowledge`, `showsGoodJudgement`, `advisorApproved`) VALUES
(123321, 'sdfkjlasd2', 'fjdskllsk', 'Boblys', 2, 'Bigsly Bog', '0', 'Five Activities', '0', 'Difficulties', 'Yea', '0', '0', '0', '2', '1992-02-14', '1992-02-28', 'Bug Frog Lane', 20, 'Fun', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10054, 'P0LcKCvslU3', '7oGWewLd8I', 'Apple', 5, 'Peter Pedro', '', '', '1', '', '', '', '', '0', '', '1992-03-12', NULL, '', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(10054, 'YjNclaH2zX6', 'kj2itp4TED', 'HP', 6, 'Peter Pedro', '', '', '0', '', '', '', '', '0', '', NULL, NULL, '', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22643, 'TQ1HEfoZgj11', 'tnvO5wjS8I', 'HP', 11, 'Isaac Carpenter', '', '', '0', '', '', '', '', '0', '', NULL, NULL, '', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(22643, 'sJUDE3a6Bg12', 'Gg2ifxkZ1e', 'Blah', 12, 'Isaac Carpenter', '', '', '0', '', '', '', '', '0', '', NULL, NULL, '', 24, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22643, 'ewStE3RdHs13', 'niw6sK9HEm', 'Apple', 13, 'Isaac Carpenter', '', '', '0', '', '', '', '', '0', '', NULL, NULL, '', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(22643, 'cuSTEtqUgH14', '9PS6bUirhj', 'HP', 14, 'Isaac Carpenter', '', '', '0', '', '', '', '', '0', '', NULL, NULL, '', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22643, 'QGJYdN72uA15', 'qOpCZtuBKb', 'Apple', 15, 'Isaac Carpenter', '', '', '0', '', '', '', '', '0', '', NULL, NULL, '', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(22643, 'W09oU7QZrD16', 'm29C5x48Lq', 'Apple', 16, 'Isaac Carpenter', '', '', '0', '', '', '', '', '0', '', NULL, NULL, '', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(22643, 'GsV6FiUDph17', 'XW1TJ6F7cL', 'Apple', 17, 'Isaac Carpenter', '', '', '0', '', '', '', '', '0', '', NULL, NULL, '', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(123321, 'sdfkjlasd2', 'fjdskllsk', 'Boblys', 18, 'Bigsly Bog', '0', 'Five Activities', '0', 'Difficulties', 'Yea', '0', '0', '0', '2', '1992-02-14', '1992-02-28', 'Bug Frog Lane', 20, 'Fun', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(123321, 'sdfkjlasd2', 'fjdskllsk', 'Boblys', 19, 'Bigsly Bog', '0', 'Five Activities', '0', 'Difficulties', 'Yea', '0', '0', '0', '2', '1992-02-14', '1992-02-28', 'Bug Frog Lane', 20, 'Fun', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22643, 'sdfkjlasd2', 'fjdskllsk', 'Boblys', 20, 'Bigsly Bog', '0', 'Five Activities', '0', 'Difficulties', 'Yea', '0', '0', '0', '2', '1992-02-14', '1992-02-28', 'Bug Frog Lane', 20, 'Fun', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22643, 'gkQ4lJuGzO21', 'kIrp8NdyEx', 'Boblys', 21, 'Bigsly Bog', '0', 'Five Activities', '0', 'Difficulties', 'Yea', '0', '0', '0', '2', '1992-02-14', '1992-02-28', 'Bug Frog Lane', 20, 'Fun', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22643, 'dlqcXVmhaY22', 'CkIaYjvJ73', 'Blah', 22, 'Bigsly Bog', '0', 'Five Activities', '0', 'Difficulties', 'Yea', '0', '0', '0', '2', '1992-02-14', '1992-02-28', 'Bug Frog Lane', 20, 'Fun', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(22643, 'bytPc1eOpK23', '2Vykh9Uw8S', 'Apple', 23, 'Isaac Carpenter', '0', 'Five Activities', '0', 'Difficulties', 'Yea', '0', '0', '0', '2', '1992-02-14', '1992-02-28', 'Bug Frog Lane', 20, 'Fun', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22643, 'y5cl4IJ2kA24', '6U0C1KNlkH', 'Blah', 24, 'Isaac Carpenter', 'Yes', 'Five Activities', '0', 'Difficulties', 'Yea', '0', '0', '0', '2', '1992-02-14', '1992-02-28', 'Bug Frog Lane', 20, 'Fun', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(22643, 'xmQEp0IZWG25', 'PXozjShbv7', 'Blah', 25, 'Isaac Carpenter', 'No', 'Had fun, slimed, thats it.', '0', 'Difficulties', 'Yea', '0', '0', '0', '2', '1992-02-14', '1992-02-28', 'Bug Frog Lane', 20, 'Fun', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22643, '9DHMwn0gkA26', '7zTgIN8Hq2', '', 26, 'Isaac Carpenter', 'Office', 'fds', '0', 'sdf', 'Yea', '0', '0', '0', '2', '1992-02-14', '1992-02-28', 'Bug Frog Lane', 20, 'Fun', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22643, 'TNCikspO6t27', 'beUOPi8lhr', 'Blah', 27, 'Isaac Carpenter', 'Office', 'dfs', '0', 'hfh', 'gsfd', 'Yeah, theres a bunch of stuff', 'No i didnt', '0', '3', '1992-02-14', '1992-02-28', 'Bug Frog Lane', 20, 'Fun', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(22643, 'CkPaWgT0Jr28', '1308TYo2Br', 'Blah', 28, 'Isaac Carpenter', 'fds', 'dfs', '0', 'sdf', 'sdf', 'fds', '0', '0', '2', '1992-02-14', '1992-02-28', 'Bug Frog Lane', 20, 'Fun', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22643, '4x6S8AJTO929', 'eM4cLK9is0', 'Apple', 29, 'Isaac Carpenter', 'fds', 'fsd', '0', 'fds', 'sdf', 'fds', 'sdf', '0', '2', '1992-02-14', '1992-02-28', 'Bug Frog Lane', 20, 'Fun', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22643, 'qBaj0dnfDP30', 'w1yVZcezxU', 'Blah', 30, 'Isaac Carpenter', 'fs', 'af', '0', 'asf', 'fsa', 'asf', 'fsa', '0', '2', '1992-02-14', '1992-02-28', 'Bug Frog Lane', 20, 'Fun', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(22643, 'p0lUcgkZM833', 'I3EeCVcvTU', 'Blah', 33, 'Isaac Carpenter', 'fa', 'jlk', '0', 'jkkl', 'klj', 'kk', 'kll', '0', '5', '1992-02-14', '1992-02-28', 'fsd', 3, 'Fun', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22643, 'nWslBh5zCE34', 'PLIN3fV2Gp', 'Blah', 34, 'Isaac Carpenter', 'fa', 'fds', '0', 'fds', 'sdf', 'fds', 'sdf', '0', '5', '1992-02-14', '1992-02-28', 'sfd', 20, 'Fun', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(22643, 'IARCa0Y2O135', 'eAF81huOl4', 'Blah', 35, 'Isaac Carpenter', 'ffs', 'sdf', '0', 'sdf', 'fa', 'sf', 'asdf', '0', '3', '1992-02-14', '1992-02-28', 'BigDog', 20, 'Fun', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22643, 'IZL2VohDb736', '5PfKwXoqCZ', '', 36, 'Isaac Carpenter', 'fs', '', '0', '', '', '', '', '0', '3', '1992-02-14', '1992-02-28', 'BigDog', 20, 'Fun', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22643, 'VnzO7cPBrZ37', 'bXiQKnWSj9', 'Blah', 37, 'Isaac Carpenter', 'sdf', 'fsd', '0', 'fds', 'fd', 'ad', 'fs', '0', '3', '1992-02-14', '1992-02-28', 'BigDog', 20, 'Fun', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22643, 'K7r2LugeT038', '5JyomaeEsT', '', 38, 'Isaac Carpenter', '', '', '0', '', '', '', '', '0', '2', '1992-02-14', '1992-02-28', 'Bug Frog Lane', 20, 'Fun', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(122332, 'superUsername', 'superPassword', 'companyChosen', 53, 'studentName', '0', 'Five Activities', '0', 'Difficulties', 'Yea', '0', '0', '0', '2', '1992-02-14', '1992-02-28', 'Bug Frog Lane', 20, 'Fun', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22643, 'rVRTHI4Fj158', 'rVRTHI4Fj158', 'Blah', 58, 'Isaac Carpenter', '0', 'TestResult', '0', 'TestResult', 'Yea', '0', '0', '0', '2', '1992-02-14', '1992-02-28', 'Bug Frog Lane', 20, 'Fun', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(22643, '2ejtI8fi9g59', '2ejtI8fi9g59', '', 59, 'Isaac Carpenter', '0', 'TestResult', '0', 'TestResult', 'TestResult', 'TestResult', '', '0', '2', '1992-02-14', '1992-02-28', 'TestResult', 20, 'Fun', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22643, 'iqxe3y19Pk60', 'iqxe3y19Pk60', 'Apple', 60, 'Isaac Carpenter', '0', 'TestResult', '0', 'TestResult', 'TestResult', 'TestResult', '', '0', '2', '1992-02-14', '1992-02-28', 'TestResult', 20, 'TestResult', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(22643, 'T7JDStLzyY61', 'T7JDStLzyY61', 'Apple', 61, 'Isaac Carpenter', '0', 'TestResult', '0', 'TestResult', 'TestResult', 'TestResult', 'TestResult', '0', '2', '1992-02-14', '1992-02-28', 'TestResult', 20, 'TestResult', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(22643, 'hKX5fFJpeG62', 'hKX5fFJpeG62', 'Blah', 62, 'Isaac Carpenter', '0', 'TestResult', '0', 'TestResult', 'TestResult', 'TestResult', 'TestResult', '0', '2', '1992-02-14', '1992-02-28', 'TestResult', 20, 'TestResult', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22643, '9S7lD5nKPz63', '9S7lD5nKPz63', 'Blah', 63, 'Isaac Carpenter', '0', 'TestResult', '0', 'TestResult', 'TestResult', 'TestResult', 'TestResult', '0', '3', '1992-02-14', '1992-02-28', 'TestResult', 20, 'TestResult', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22643, 'a1UKQe0BYV64', 'a1UKQe0BYV64', '', 64, 'Isaac Carpenter', '1', 'TestResult', '1', 'TestResult', 'TestResult', 'TestResult', 'TestResult', '1', '5', '1992-02-14', '1992-02-28', 'TestResult', 26, 'TestResult', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22643, '9hkC4JivzQ65', '9hkC4JivzQ65', 'Blah', 65, 'Isaac Carpenter', '1', 'TestResult', '0', 'TestResult', 'TestResult', 'TestResult', 'TestResult', '1', '3', '1992-02-14', '1992-02-28', 'TestResult', 20, 'TestResult', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22643, 'qrxJ40tlgX66', 'qrxJ40tlgX66', 'Apple', 66, 'Isaac Carpenter', '1', 'TestResult', '0', 'TestResult', 'TestResult', 'TestResult', 'TestResult', '1', '3', '1992-02-14', '1992-02-28', 'TestResult', 20, 'TestResult', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(22643, 'fSxquay3id67', 'fSxquay3id67', 'Blah', 67, 'Isaac Carpenter', '1', 'TestResult', '1', 'TestResult', 'TestResult', 'TestResult', 'TestResult', '1', '3', '1992-02-14', '1992-02-28', 'TestResult', 20, 'TestResult', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22643, 'ptJoIYO2Dy68', 'ptJoIYO2Dy68', 'Blah', 68, 'Isaac Carpenter', '1', 'TestResult', '1', 'TestResult', 'TestResult', 'TestResult', 'TestResult', '1', '3', '1992-02-14', '1992-02-28', 'TestResult', 20, 'TestResult', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(22643, 'IwcQvOlNaB69', 'IwcQvOlNaB69', 'Blah', 69, 'Isaac Carpenter', '0', 'TestResult', '0', 'TestResult', 'TestResult', 'TestResult', 'TestResult', '0', '3', '1992-02-14', '1992-02-28', 'TestResult', 20, 'TestResult', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22643, 'qO7CseLWU570', 'qO7CseLWU570', '', 70, 'Isaac Carpenter', '0', 'TestResult', '0', 'TestResult', 'TestResult', 'TestResult', 'TestResult', '0', '3', '1992-02-14', '1992-02-28', 'TestResult', 20, 'TestResult', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22643, 'ZR2WQgBlNM71', 'ZR2WQgBlNM71', '', 71, 'Isaac Carpenter', '0', 'TestResult', '0', 'TestResult', 'TestResult', 'TestResult', 'TestResult', '0', '3', '1992-02-14', '1992-02-28', 'TestResult', 20, 'TestResult', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22643, 'pJKNWuXDq672', 'pJKNWuXDq672', 'Personal', 72, 'Isaac Carpenter', '0', 'TestResult', '0', 'TestResult', 'TestResult', 'TestResult', 'TestResult', '0', '3', '1992-02-14', '1992-02-28', 'TestResult', 20, 'TestResult', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(22643, 'gZslXDpwK473', 'gZslXDpwK473', 'Personal', 73, 'Isaac Carpenter', '1', 'fds', '1', 'sdf', 'fds', 'sdf', 'fdsa', '1', '3', '1992-02-14', '1992-02-28', 'fds', 20, 'fdssdf', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(22643, 'X7vBoQ4swL74', 'X7vBoQ4swL74', 'Personal', 74, 'Isaac Carpenter', '1', 'fds', '1', 'Yeah, I had a lot of difficulties. Had some tough times..', 'sdf', 'fds', 'sfd', '1', '3', '1992-02-14', '1992-02-28', 'fsd', 22, 'fdsdsf', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22643, 'K9mJWCSjGa75', 'K9mJWCSjGa75', 'Apple', 75, 'Isaac Carpenter', '1', 'Fun', '0', 'fsd', 'sdf', 'fasd', 'fda', '1', '5', '1992-02-14', '1992-02-28', 'fds', 22, 'fds', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(76654, 'fNDlAowSgE76', 'fNDlAowSgE76', 'Personal', 76, 'Biff Smalts', '1', 'I worked hard on many different projects.', '1', 'Plenty of difficulties', 'Hard work pays off', 'yeah', 'not really', '1', '5', '1992-02-14', '1992-02-28', 'fds', 20, 'fds', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22643, 'vTrfXuVi4M77', 'vTrfXuVi4M77', 'Personal', 77, 'Isaac Carpenter', '1', 'a', '1', 'a', 'a', 'a', 'a', '1', '3', '1992-02-14', '1992-02-28', '123 ', 20, 'cgt', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22643, 'SCmBVwORk878', 'SCmBVwORk878', 'Personal', 78, 'Isaac Carpenter', '1', 'fds', '0', 'fdsf', 'dsfsd', 'sdfdf', 'fds', '0', '3', '1992-02-14', '1992-02-28', 'dsfdlskf', 20, 'fjdksfljkdf', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `internship_work`
--

CREATE TABLE `internship_work` (
  `work_id` int(30) NOT NULL COMMENT 'uniqueID associated with image',
  `student_id` int(50) NOT NULL COMMENT 'internship form associated',
  `work_name` varchar(80) NOT NULL COMMENT 'name of peice',
  `file_name` varchar(100) NOT NULL COMMENT 'name of file (random)'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `internship_work`
--

INSERT INTO `internship_work` (`work_id`, `student_id`, `work_name`, `file_name`) VALUES
(1, 2234432, 'blockusBingo', 'Work5.jpg'),
(10, 22643, 'fdas', 'studentWorkNum10.png'),
(11, 22643, 'fdas', 'studentWorkNum11.png'),
(12, 22643, 'fdas', 'studentWorkNum12.png'),
(13, 22643, 'work', 'studentWorkNum13.png'),
(14, 22643, 'fsadf', 'studentWorkNum14.png'),
(15, 22643, 'uhh image mucH?', 'studentWorkNum15.png'),
(16, 76654, 'b1', 'studentWorkNum16.jpg'),
(17, 76654, 'b2', 'studentWorkNum17.jpg'),
(18, 76654, 'b3', 'studentWorkNum18.jpg'),
(19, 22643, 'picture i took', 'studentWorkNum19.jpg'),
(20, 22643, 'picture', 'studentWorkNum20.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `job_title`
--

CREATE TABLE `job_title` (
  `ID` varchar(14) NOT NULL DEFAULT '',
  `STUDENT_ID` varchar(14) DEFAULT NULL,
  `a` varchar(50) DEFAULT NULL,
  `b` varchar(50) DEFAULT NULL,
  `c` varchar(7) DEFAULT NULL,
  `d` varchar(50) DEFAULT NULL,
  `e` char(50) DEFAULT NULL,
  `f` varchar(20) DEFAULT NULL,
  `g` varchar(20) DEFAULT NULL,
  `h` varchar(20) DEFAULT NULL,
  `i` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_title`
--

INSERT INTO `job_title` (`ID`, `STUDENT_ID`, `a`, `b`, `c`, `d`, `e`, `f`, `g`, `h`, `i`) VALUES
('00e74', 'test', 'test', 'test', 'test', 'v', 'test', 'test', 'test', 'test', 'test'),
('0dfe0', '10203', 'Undergraduate degree ', 'Computer Science', '8.5', 'UOW', 'Canada', '12months', 'test', 'asdf', 'i'),
('5a241', '00000000', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a'),
('7271a', '', 'sdf', 'sdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'adsf', 'asdf'),
('789fd', '', 'seg', 's', 'd', 'f', 'd', 's', 'f', 's', 'd'),
('8f8db', '1003', 'Under Graduate', 'Natural Sciences', '7.8', 'University of Windsor', 'Canada', '24 months', 'test', 'asdf', 'i'),
('971fd', 't', 't', 't', 't', 't', 't', 't', 't', 't', 't'),
('a71cf', '2086', 'UGC', 'Computer Science', '7.5', 'FIEM', 'India', '48months', 'test', 'asdf', 'i'),
('bd985', 'test', 'test', 'test', 'test', 'v', 'test', 'test', 'test', 'test', 'test'),
('dcf00', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a'),
('e8fe6', '1002', 'Under Graduate', 'Computer Science', '8.8', 'University of New York', 'USA', '12 months', 'test', 'asdf', 'i'),
('eec93', '10054', 'Graduate', 'Computer Science', '8.3', 'University Of Windsor', 'Canada', '24 Months', 'test', 'asdf', 'i');

-- --------------------------------------------------------

--
-- Table structure for table `StudentStuff`
--

CREATE TABLE `StudentStuff` (
  `formNum` int(11) NOT NULL,
  `uniqueString` varchar(100) NOT NULL,
  `studentId` int(20) NOT NULL,
  `workInOffice` varchar(1) NOT NULL,
  `fiveActivities` varchar(500) NOT NULL,
  `relevantWork` int(1) NOT NULL,
  `difficulties` varchar(500) NOT NULL,
  `expRelation` varchar(500) NOT NULL,
  `anythingLearned` varchar(500) NOT NULL,
  `changedMind` varchar(500) NOT NULL,
  `providedContacts` varchar(1) NOT NULL,
  `rateExp` int(1) NOT NULL,
  `workStartDate` date NOT NULL,
  `endDate` date NOT NULL,
  `hoursWorked` int(5) NOT NULL,
  `cgtSector` varchar(50) NOT NULL,
  `companyName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `StudentStuff`
--

INSERT INTO `StudentStuff` (`formNum`, `uniqueString`, `studentId`, `workInOffice`, `fiveActivities`, `relevantWork`, `difficulties`, `expRelation`, `anythingLearned`, `changedMind`, `providedContacts`, `rateExp`, `workStartDate`, `endDate`, `hoursWorked`, `cgtSector`, `companyName`) VALUES
(3, 'askfjlskadfj2', 2344322, '1', 'fiveAct', 0, 'diff', 'expRel', 'anythingLearned', 'changedMind', '0', 4, '1999-02-02', '1999-02-04', 22, 'cgtSector', '0'),
(4, 'xGtXAupVoH52', 2344322, '0', 'fiveAct', 0, 'diff', 'expRel', 'anythingLearned', 'changedMind', '0', 4, '1999-02-02', '1999-02-04', 22, 'cgtSector', '0'),
(5, 'ALwqNhoc1v52', 22643, '0', 'fiveAct', 0, 'diff', 'expRel', 'anythingLearned', 'changedMind', '0', 4, '1999-02-02', '1999-02-04', 22, 'cgtSector', '0'),
(6, 'H8AVXSk76u52', 22643, '0', 'fiveAct', 0, 'diff', 'expRel', 'anythingLearned', 'changedMind', '0', 4, '1999-02-02', '1999-02-04', 22, 'cgtSector', '0'),
(7, 'Wz5RPp7xI352', 22643, '0', 'hung out had fun what else', 0, 'diff', 'expRel', 'anythingLearned', 'changedMind', '0', 4, '1999-02-02', '1999-02-04', 22, 'cgtSector', '0'),
(8, 'XMmkcqGtzQ52', 22643, '0', 'smiled', 0, 'working', 'expRel', 'anythingLearned', 'changedMind', '0', 4, '1999-02-02', '1999-02-04', 22, 'cgtSector', '0'),
(9, 'e2NvIcaoTn52', 22643, '0', 'hung out', 0, 'yeah had some', '', 'anythingLearned', 'changedMind', '0', 4, '1999-02-02', '1999-02-04', 22, 'cgtSector', '0'),
(10, 'rdPatjMnWe52', 22643, '0', '5 tings', 0, 'some', '', 'anythingLearned', 'changedMind', '0', 4, '1999-02-02', '1999-02-04', 22, 'cgtSector', '0'),
(11, 'NkBgrVefmA52', 22643, '0', '5 thins', 0, 'kljsdf', 'lkkll', 'anythingLearned', 'changedMind', '0', 4, '1999-02-02', '1999-02-04', 22, 'cgtSector', '0'),
(12, 'X4J1Ex08gG52', 22643, '0', '', 0, '', '', 'wanted to learn', 'changedMind', '0', 4, '1999-02-02', '1999-02-04', 22, 'cgtSector', '0'),
(13, 'y82HQ6Vrow52', 22643, '0', '', 0, '', '', '', 'yeah', '0', 4, '1999-02-02', '1999-02-04', 22, 'cgtSector', '0'),
(14, 'a4LmWOfBFV52', 22643, '0', '', 0, '', '', '', '', '0', 4, '1999-02-02', '1999-02-04', 22, 'Friend', '0'),
(15, 'no07rpqfKD52', 22643, '0', '', 0, '', '', '', '', '0', 4, '1999-02-02', '1999-02-04', 56, '', '0'),
(16, 'f7nbQkYuvJ52', 22643, '0', '', 0, '', '', '', '', '0', 4, '1999-02-02', '1999-02-04', 6, '', '0'),
(17, '7CiWrVhd6j52', 22643, '0', '', 0, '', '', '', '', '0', 4, '1999-02-02', '1999-02-04', 49, '', '0'),
(18, 'fwKQMopOdr52', 22643, '0', '', 0, '', '', '', '', '0', 4, '1999-02-02', '1999-02-04', 45, '', '0'),
(19, 'jdowbAgfWL52', 22643, '0', 'dfs', 0, 'sdf', 'fds', 'adf', 'fdsa', '0', 2, '1999-02-02', '1999-02-04', 4, 'fds', '0'),
(20, 'Z3OUXKbNal52', 22643, '1', 'dfs', 0, 'sdf', 'fds', 'adf', 'fdsa', '0', 2, '1999-02-02', '1999-02-04', 4, 'fds', '0'),
(21, 'aksldfjkfj222', 2234432, '0', 'fiveact', 0, 'difficulites', 'expRelation', 'anythingLearned', 'changedMind', '0', 5, '1999-02-02', '1999-02-02', 20, 'cgtSector', '5003'),
(22, 'aksldfjkfj222', 2234432, '0', 'fiveact', 0, 'difficulites', 'expRelation', 'anythingLearned', 'changedMind', '0', 5, '1999-02-02', '1999-02-02', 20, 'cgtSector', '2234432'),
(23, 'yPtEeI6X3T52', 22643, '0', 'sdf', 0, 'sdf', 'fda', 'adfdg', 'asdg', '0', 2, '1999-02-02', '1999-02-04', 3, 'fsdf', '5003'),
(24, 'ShUrsbTWHD52', 22643, '1', 'fsd', 0, 'fdsa', 'fdsa', 'asdf', 'asdf', '0', 4, '1999-02-02', '1999-02-04', 3, 'fdsa', '5003'),
(25, 'Tun38c1Fr552', 22643, '0', 'TestResult', 0, 'TestResult', 'TestResult', 'TestResult', 'TestResult', '0', 3, '1999-02-02', '1999-02-04', 4, 'TestResult', '5003'),
(26, 'uBVPJImRWx52', 22643, '0', 'TestResult', 0, 'TestResult', 'TestResult', 'TestResult', 'TestResult', '0', 3, '1999-02-02', '1999-02-04', 4, 'TestResult', '5003'),
(27, 'FG2XWEeRs152', 22643, '0', 'TestResult', 0, 'TestResult', 'TestResult', 'TestResult', 'TestResult', '0', 3, '1999-02-02', '1999-02-04', 20, 'TestResult', '5003'),
(28, 'Yud8vJGolg52', 22643, '0', 'TestResult', 0, 'TestResult', 'TestResult', 'TestResult', 'TestResult', '0', 3, '1999-02-02', '1999-02-04', 20, 'TestResult', '5003'),
(29, 'WBy650qlTI52', 22643, '0', 'TestResult', 0, 'TestResult', 'TestResult', 'TestResult', 'TestResult', '0', 3, '1999-02-02', '1999-02-04', 20, 'TestResult', '5003'),
(30, 'fdw3M1zAUq52', 22643, '0', 'TestResult', 0, 'TestResult', 'TestResult', 'TestResult', 'TestResult', '0', 3, '1999-02-02', '1999-02-04', 20, 'TestResult', '5003'),
(31, 'XsxJuWSrFe52', 22643, '0', 'TestResult', 0, 'TestResult', 'TestResult', 'TestResult', 'TestResult', '0', 3, '1999-02-02', '1999-02-04', 20, 'TestResult', '5003'),
(32, 'Dhr7RGTX5252', 22643, '0', 'TestResult', 0, 'TestResult', 'TestResult', 'TestResult', 'TestResult', '0', 3, '1999-02-02', '1999-02-04', 20, 'TestResult', '5003'),
(33, 'VMfgtcuK8Q52', 22643, '1', 'TestResult', 1, 'TestResult', 'TestResult', 'TestResult', 'TestResult', '1', 3, '1999-02-02', '1999-02-04', 20, 'TestResult', '5003'),
(34, 'Qz3MuhJqFf52', 22643, '0', 'TestResult', 0, 'TestResult', 'TestResult', 'TestResult', 'TestResult', '0', 3, '1999-02-02', '1999-02-04', 20, 'TestResult', 'Blah'),
(35, 'NPhmExC3d252', 22643, '0', 'TestResult', 0, 'TestResult', 'TestResult', 'TestResult', 'TestResult', '0', 3, '1999-02-02', '1999-02-04', 20, 'TestResult', ''),
(36, '9az6vVCMqo52', 22643, '0', 'TestResult', 0, 'TestResult', 'TestResult', 'TestResult', 'TestResult', '0', 3, '1999-02-02', '1999-02-04', 20, 'TestResult', 'Apple'),
(37, 'mruc8dB1Rs52', 22643, '0', 'TestResult', 0, 'TestResult', 'TestResult', 'TestResult', 'TestResult', '0', 3, '1999-02-02', '1999-02-04', 20, 'TestResult', 'Blah');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `STUDENT_ID` varchar(14) NOT NULL DEFAULT '',
  `FIRST_NAME` char(50) DEFAULT NULL,
  `MIDDLE_NAME` char(50) DEFAULT NULL,
  `LAST_NAME` char(50) DEFAULT NULL,
  `EMAIL` varchar(255) DEFAULT NULL,
  `TELEPHONE` varchar(11) DEFAULT NULL,
  `CAMPUS` varchar(50) DEFAULT NULL,
  `COMPANYID` varchar(50) DEFAULT NULL,
  `USERNAME` varchar(40) NOT NULL,
  `PASSWORD` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`STUDENT_ID`, `FIRST_NAME`, `MIDDLE_NAME`, `LAST_NAME`, `EMAIL`, `TELEPHONE`, `CAMPUS`, `COMPANYID`, `USERNAME`, `PASSWORD`) VALUES
('10054', 'Peter', 'Pedro', 'Franken', 'Franken@uow.ca', '987687005', 'WL', NULL, 'pPedro', 'Frog22'),
('22344', 'Bug', 'Watson', 'Froglet', 'bug2445@purdue.edu', '2234432', 'WL', '234432', 'bug234', 'bugboy'),
('22643', 'Isaac', 'Edwin', 'Carpenter', 'icarpent@purdue.edu', '2602392913', 'WL', NULL, 'icarpent', 'Cake22'),
('33333', 'Sarah', 'Roach', 'Crab', 'sroach@purdue.edu', '23334432', 'WL', 'NA', 'sarah22', 'Dog22'),
('76654', 'Biff', 'Watsy', 'Smalts', 'biff@smalts', '23342234', 'WL', 'NA', 'bSmalts', 'Small13');

-- --------------------------------------------------------

--
-- Table structure for table `supervisor_details`
--

CREATE TABLE `supervisor_details` (
  `SUPERVISOR_ID` varchar(14) NOT NULL DEFAULT '',
  `EMAIL` varchar(255) DEFAULT NULL,
  `TELEPHONE` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supervisor_details`
--

INSERT INTO `supervisor_details` (`SUPERVISOR_ID`, `EMAIL`, `TELEPHONE`) VALUES
('5adc3', 'a', 'a'),
('a8911', 't', 't');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(100) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `adminLevel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `username`, `password`, `adminLevel`) VALUES
(333, 'admin', 'admin', 1),
(1253, 'super', 'super', 3),
(10054, 'pPedro', 'Frog22', 2),
(22344, 'bug234', 'bugboy', 2),
(22643, 'icarpent', 'Cake22', 2),
(33333, 'sarah22', 'Dog22', 2),
(76654, 'bSmalts', 'Small13', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_detail`
--
ALTER TABLE `admin_detail`
  ADD PRIMARY KEY (`USERNAME`);

--
-- Indexes for table `company_details`
--
ALTER TABLE `company_details`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `company_info`
--
ALTER TABLE `company_info`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `internship_form`
--
ALTER TABLE `internship_form`
  ADD PRIMARY KEY (`form_number`);

--
-- Indexes for table `internship_work`
--
ALTER TABLE `internship_work`
  ADD PRIMARY KEY (`work_id`);

--
-- Indexes for table `job_title`
--
ALTER TABLE `job_title`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `StudentStuff`
--
ALTER TABLE `StudentStuff`
  ADD PRIMARY KEY (`formNum`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`STUDENT_ID`);

--
-- Indexes for table `supervisor_details`
--
ALTER TABLE `supervisor_details`
  ADD PRIMARY KEY (`SUPERVISOR_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `internship_form`
--
ALTER TABLE `internship_form`
  MODIFY `form_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
--
-- AUTO_INCREMENT for table `internship_work`
--
ALTER TABLE `internship_work`
  MODIFY `work_id` int(30) NOT NULL AUTO_INCREMENT COMMENT 'uniqueID associated with image', AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `StudentStuff`
--
ALTER TABLE `StudentStuff`
  MODIFY `formNum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76655;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
