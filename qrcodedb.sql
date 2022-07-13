-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2022 at 06:03 PM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qrcodedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `ID` int(11) NOT NULL,
  `voterID` varchar(250) NOT NULL,
  `TIMEIN` varchar(250) NOT NULL,
  `TIMEOUT` varchar(250) NOT NULL,
  `LOGDATE` varchar(250) NOT NULL,
  `STATUS` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`ID`, `voterID`, `TIMEIN`, `TIMEOUT`, `LOGDATE`, `STATUS`) VALUES
(160, 'SY01-1122', '17:56:25', '17:57:00', '2021-05-03', '1'),
(161, 'SY02-1133', '17:56:29', '17:56:54', '2021-05-03', '1'),
(162, 'SY03-1144', '17:56:34', '17:56:49', '2021-05-03', '1'),
(163, 'SY04-1155', '17:56:37', '17:56:40', '2021-05-03', '1'),
(165, 'SY02-1133', '06:52:06', '', '2021-05-04', '0'),
(166, '', '02:35:48', '', '2021-05-07', '0'),
(167, '1122121200004', '02:36:38', '02:38:15', '2021-05-07', '1'),
(168, '4802000000006', '02:38:02', '02:38:06', '2021-05-07', '1'),
(169, 'SY01-1122', '14:44:45 PM', '', '2022-03-01', '0'),
(170, 'SY02-1133', '14:54:22 PM', '', '2022-03-01', '0'),
(171, 'SY03-1144', '14:54:47 PM', '', '2022-03-01', '0');

-- --------------------------------------------------------

--
-- Table structure for table `kaisa`
--

CREATE TABLE `kaisa` (
  `ID` int(11) NOT NULL,
  `voterID` varchar(250) NOT NULL,
  `fname` varchar(250) NOT NULL,
  `mname` varchar(250) NOT NULL,
  `lname` varchar(250) NOT NULL,
  `timein` varchar(250) NOT NULL,
  `precint` varchar(250) NOT NULL,
  `status` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kaisa`
--

INSERT INTO `kaisa` (`ID`, `voterID`, `fname`, `mname`, `lname`, `timein`, `precint`, `status`) VALUES
(1, 'SY01-1122', 'John', 'P', 'Cena', '123', '44A', 'voted'),
(2, 'SY02-1133', 'Andres', 'P', 'Jario', '31', '44B', ''),
(3, 'SY03-1144', 'Crischel', 'T', 'Amorio', '123', '45C', 'voted'),
(4, 'SY04-1155', 'Source', 'S', 'Code', '123', '', 'ddd');

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `ID` int(11) NOT NULL,
  `TIMEIN` time NOT NULL,
  `TIMEOUT` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`ID`, `TIMEIN`, `TIMEOUT`) VALUES
(1, '07:00:00', '16:00:00'),
(2, '08:00:00', '17:00:00'),
(3, '09:00:00', '18:00:00'),
(4, '10:00:00', '19:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `kaisa`
--
ALTER TABLE `kaisa`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;
--
-- AUTO_INCREMENT for table `kaisa`
--
ALTER TABLE `kaisa`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
