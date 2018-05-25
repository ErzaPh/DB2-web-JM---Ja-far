-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2016 at 06:55 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finals`
--

-- --------------------------------------------------------

--
-- Table structure for table `salary_records`
--

CREATE TABLE `salary_records` (
  `EmpID` int(20) NOT NULL,
  `DateStarted` date NOT NULL,
  `DateEnd` date NOT NULL,
  `DaysPresent` int(20) NOT NULL,
  `TotalHours` int(20) NOT NULL,
  `RatePerHour` int(20) NOT NULL,
  `GrossNet` int(20) NOT NULL,
  `SSS` int(20) NOT NULL,
  `PhilHealth` int(20) NOT NULL,
  `PagIbig` int(20) NOT NULL,
  `CA` int(20) NOT NULL,
  `Penalty` int(20) NOT NULL,
  `Net` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salary_records`
--

INSERT INTO `salary_records` (`EmpID`, `DateStarted`, `DateEnd`, `DaysPresent`, `TotalHours`, `RatePerHour`, `GrossNet`, `SSS`, `PhilHealth`, `PagIbig`, `CA`, `Penalty`, `Net`) VALUES
(0, '2016-03-15', '2016-03-31', 16, 128, 39, 4992, 100, 100, 100, 100, 100, 4492),
(0, '2016-04-01', '2016-04-15', 15, 128, 39, 4992, 100, 100, 100, 0, 0, 4692),
(2, '2016-04-01', '2016-04-15', 15, 128, 39, 4992, 100, 100, 100, 0, 0, 4692),
(2, '2016-04-01', '2016-04-15', 15, 128, 39, 4992, 100, 100, 100, 0, 0, 4692),
(2, '2016-04-01', '2016-04-15', 15, 128, 39, 4992, 100, 100, 100, 0, 0, 4692),
(2, '2016-04-01', '2016-04-15', 15, 128, 39, 4992, 100, 100, 100, 0, 0, 4692),
(1, '2016-04-15', '0000-00-00', 14, 120, 39, 4680, 100, 100, 100, 0, 0, 4380),
(1, '2016-04-15', '0000-00-00', 14, 120, 39, 4680, 100, 100, 100, 0, 0, 4380),
(3, '2016-04-01', '2016-04-15', 14, 120, 39, 4680, 100, 100, 100, 0, 0, 4380),
(4, '2016-04-01', '2016-04-15', 15, 128, 39, 4992, 100, 100, 100, 0, 0, 4692),
(5, '2016-04-01', '2016-04-15', 15, 128, 39, 4992, 100, 100, 100, 0, 0, 4692),
(6, '2016-04-01', '2016-04-15', 15, 128, 39, 4992, 100, 100, 100, 0, 0, 4692);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
