-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 09, 2019 at 05:53 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imis`
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
('000000', 'zzInstagramz', 'Wall st.', 'Windsor', '23412', 'united states', 'mark', 'Zuckerburg', 'ceo', '1231231234', '123@gmail.com', '123-123-1234'),
('123', 'facebook', '123 street', 'California', '123', 'United States', 'Mark', 'Zuckerburg', 'ceo', '123', '123', '123'),
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
('0dfe0', '10203', 'Google', '12/1/2014', '-', 'GA', '12', 'WebProgramming'),
('2fc7f', 'a', '5004', 'a', 'a', 'a', 'a', 'a'),
('4a01d', 'dodo', '5004', 'dodo', 'dodo', 'dodo', 'dodo', 'dodo'),
('540a8', '123123123', 'a', 'a', 'a', 'a', 'a', 'a'),
('8f8db', '1003', 'Philips', '2013', '-', 'CA', '12', 'WebProgramming'),
('a71cf', '2086', 'Google', '5-5-2015', '-', 'IN', '12', 'WebProgramming'),
('afac8', '0012121212', 'HP', '12', '12', 'test', 'test', 'Web Programming'),
('c7b6c', '123123', '', 'k', 'k', 'k', 'k', 'k'),
('d4ed1', '0021210292', 'Apple', '12/21/23', '12/22/24', '123 abbotts bridge rd.', '200', 'BIM'),
('d7506', 'abcd', '5004', 'abcd', 'abcd', 'abcd', 'abcd', 'abcd'),
('dd093', 'jk', '5003', 'jk', 'jk', 'jk', 'jk', 'jk'),
('e8fe6', '1002', 'Samsung', '12-4-2014', 'NY', 'address', '12', 'WebProgramming'),
('eec93', '10054', 'EA Games', '20-2-2014', 'FL', 'address', '12', 'WebProgramming'),
('f1362', '002938481', '5003', '1/1/12', '1/1/13', '2520 wentwood st.', '240', 'CGT - Web Dev');

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
('0dfe0', '10203', 'Undergraduate degree ', 'Computer Science', '8.5', 'UOW', 'Canada', '12months', 'test', 'asdf', 'i'),
('2fc7f', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a'),
('4a01d', 'dodo', 'dodo', 'dodo', 'dodo', 'dodo', 'dodo', 'dodo', 'dodo', 'dodo', 'dodo'),
('540a8', '123123123', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a'),
('8f8db', '1003', 'Under Graduate', 'Natural Sciences', '7.8', 'University of Windsor', 'Canada', '24 months', 'test', 'asdf', 'i'),
('a71cf', '2086', 'UGC', 'Computer Science', '7.5', 'FIEM', 'India', '48months', 'test', 'asdf', 'i'),
('afac8', '0012121212', 'office', 'a', 'test', 'test', 'test', 'test', 'test', 'test', 'test'),
('c7b6c', '123123', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k'),
('d4ed1', '0021210292', 'office', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a'),
('d7506', 'abcd', 'abcd', 'abcd', 'abcd', 'abcd', 'abcd', 'abcd', 'abcd', 'abcd', 'abcd'),
('dd093', 'jk', 'jk', 'jk', 'jk', 'jk', 'jk', 'jk', 'jk', 'jk', 'jk'),
('e8fe6', '1002', 'Under Graduate', 'Computer Science', '8.8', 'University of New York', 'USA', '12 months', 'test', 'asdf', 'i'),
('eec93', '10054', 'Graduate', 'Computer Science', '8.3', 'University Of Windsor', 'Canada', '24 Months', 'test', 'asdf', 'i'),
('f1362', '002938481', 'office', 'web security', 'no', 'time management', 'cgt web programming', 'no', 'no', 'no', '3');

-- --------------------------------------------------------


CREATE TABLE `salary_rate` (
  `ID` varchar(14) NOT NULL DEFAULT '',
  `STUDENT_ID` varchar(14) DEFAULT NULL,
  `aaa` varchar(50) DEFAULT NULL,
  `bbb` varchar(50) DEFAULT NULL,
  `ccc` varchar(50) DEFAULT NULL,
  `dddd` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
    `ACADEMIC_ADVISOR` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`STUDENT_ID`, `FIRST_NAME`, `MIDDLE_NAME`, `LAST_NAME`, `EMAIL`, `TELEPHONE`, `CAMPUS`, `COMPANYID`) VALUES
('002938481', 'Bryan', 'William', 'takashi', '2530lee2@purdue.edu', '404-343-513', 'Lafayette', '5003'),
('123123', 'Bryan', 'Wonhee', 'Lee', '940529', 'k', 'Lafayette', '5003'),
('123123123', 'Shawn', '', 'Farrington', '123123', '123123', 'Lafayette', '5003'),
('a', 'a', 'a', 'a', 'a', 'a', 'a', '5004'),
('abcd', 'abcd', 'abcd', 'abcd', 'abcd', 'abcd', 'abcd', '5004'),
('dodo', 'dodo', 'dodo', 'dodo', 'dodo', 'dodo', 'dodo', '5004'),
('jk', 'jk', 'jk', 'jk', 'jk', 'jk', 'jk', '5003');

-- --------------------------------------------------------

--
-- Table structure for table `supervisor_details`
--

CREATE TABLE `supervisor_details` (
  `SUPERVISOR_ID` varchar(14) NOT NULL DEFAULT '',
    `SUPERVISOR_NAME` varchar(255) DEFAULT NULL,
  `EMAIL` varchar(255) DEFAULT NULL,
  `TELEPHONE` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supervisor_details`
--

INSERT INTO `supervisor_details` (`SUPERVISOR_ID`,  `SUPERVISOR_NAME`, `EMAIL`, `TELEPHONE`) VALUES
('', 'KEVIN', 'apple@gmail.com', '512-123-123'),
('018ce', 'JASON', 'apple@gmail.com', '512-123-123');

-- --------------------------------------------------------

--
-- Table structure for table `supervisor_review`
--

CREATE TABLE `supervisor_review` (
  `ID` varchar(14) NOT NULL DEFAULT '',
  `STUDENT_ID` varchar(14) DEFAULT NULL,
  `OS_NAME` varchar(32) DEFAULT NULL,
  `SREVIEW` varchar(22) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



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
-- Indexes for table `job_title`
--
ALTER TABLE `job_title`
  ADD PRIMARY KEY (`ID`);

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
-- Indexes for table `supervisor_review`
--
ALTER TABLE `supervisor_review`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
