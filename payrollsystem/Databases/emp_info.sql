-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2016 at 09:47 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `finals`
--

-- --------------------------------------------------------

--
-- Table structure for table `emp_info`
--

CREATE TABLE IF NOT EXISTS `emp_info` (
`Emp_ID` int(100) NOT NULL,
  `Lname` varchar(15) NOT NULL,
  `Fname` varchar(15) NOT NULL,
  `Mname` varchar(10) NOT NULL,
  `Ename` varchar(10) NOT NULL,
  `Addr` text NOT NULL,
  `Contact` int(20) NOT NULL,
  `Bdate` date NOT NULL,
  `Sex` varchar(6) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `Position` varchar(10) NOT NULL,
  `Department` varchar(20) NOT NULL,
  `Username` varchar(15) NOT NULL,
  `Userpass` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_info`
--

INSERT INTO `emp_info` (`Emp_ID`, `Lname`, `Fname`, `Mname`, `Ename`, `Addr`, `Contact`, `Bdate`, `Sex`, `Status`, `Position`, `Department`, `Username`, `Userpass`) VALUES
(1, 'Neverbroken', 'Early Seven', 'Strikeland', 'Jr', 'Di makita City', 117, '1997-06-19', 'Male', 'Single', 'IT Head', 'IT Dep.', '', ''),
(2, 'you', 'me', 'him', 'SR', 'Cabao City', 911, '1914-02-14', 'Male', 'Single', 'IT Assist.', 'IT Department', '', ''),
(3, 'Dimalikayan', 'ako', 'ilag', '', 'Ilagan City', 911, '1998-03-11', 'Male', 'Single', 'Clerk', 'IT Dep.', '', ''),
(4, 'Usama', 'Binladen', 'Jafar', '', 'Pakistan', 911, '1991-02-20', 'Male', 'Single', 'Captain', 'Rebel', '', ''),
(5, 'Dili', 'Lalim', 'Ang', '', 'Database', 117, '1991-02-21', 'Male', 'Single', 'Secretary', 'IT Dep.', '', ''),
(6, 'Dilsy', 'a', 'Anga', '', 'Database', 911, '1991-02-22', 'Male', 'Single', 'Secretary', 'Crim. Dep.', '', ''),
(7, 'Dili', 'Sayon', 'Mag', '', 'DataBase', 911, '1991-02-24', 'Female', 'Married', 'Admin', 'Unknown Dep.', '', ''),
(9, 'me', 'you', 'ikaw', '', 'Wa kblo', 911, '1991-01-01', 'Female', 'Married', 'Clerk', 'Clothing Dep.', '', ''),
(10, 'ralph', 'baboy', 'si', 'sr.', 'baboyan st.', 911, '0000-00-00', 'Male', 'Single', 'janitor', 'icc', 'ralphbaboy', 'baboysiralph');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emp_info`
--
ALTER TABLE `emp_info`
 ADD PRIMARY KEY (`Emp_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emp_info`
--
ALTER TABLE `emp_info`
MODIFY `Emp_ID` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
