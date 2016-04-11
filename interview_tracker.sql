-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2016 at 07:44 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_spp`
--

-- --------------------------------------------------------

--
-- Table structure for table `interview_tracker`
--

CREATE TABLE `interview_tracker` (
  `Name` varchar(30) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `reffered_by` varchar(30) NOT NULL,
  `exp` int(2) NOT NULL,
  `module` varchar(12) NOT NULL,
  `forwarded_to_hr_on` varchar(12) NOT NULL,
  `status` varchar(15) NOT NULL,
  `first` varchar(12) NOT NULL,
  `f_interview` varchar(25) NOT NULL,
  `second` varchar(12) NOT NULL,
  `s_interview` varchar(25) NOT NULL,
  `GRM` varchar(12) NOT NULL,
  `HR` varchar(12) NOT NULL,
  `offer_released` varchar(12) NOT NULL,
  `tentative` varchar(12) NOT NULL,
  `remarks` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `interview_tracker`
--

INSERT INTO `interview_tracker` (`Name`, `contact`, `reffered_by`, `exp`, `module`, `forwarded_to_hr_on`, `status`, `first`, `f_interview`, `second`, `s_interview`, `GRM`, `HR`, `offer_released`, `tentative`, `remarks`) VALUES
('peter', '9900493435', 'john', 3, 'BI', '2015-02-02', 'REJECTED', '2016-03-03', '', '', '', '', '', '', '', ''),
('vikram', '9000909090', 'draek', 0, 'BI', '2016-03-02', 'ACCEPTED', '2016-03-10', '', '2016-03-12', '', '2016-03-19', '2016-03-19', '2016-03-21', '2016-04-01', 'will be helpful '),
('xyz', '9900786565', 'abc', 1, 'BI', '2016-02-02', 'ACCEPTED', '2016-03-03', 'aaa', '2016-03-11', 'bbb', '2016-03-24', '2016-03-29', '2016-03-18', '2016-03-31', ''),
('shubham', '9900345678', 'sam', 1, 'BI', '2016-04-01', 'IN-PROCESS', '2016-04-08', 'sandesha', '2016-04-09', 'sandesha', '', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
