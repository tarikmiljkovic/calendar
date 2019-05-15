-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 15, 2019 at 07:26 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Calendar`
--

-- --------------------------------------------------------

--
-- Table structure for table `calendar-entries`
--

CREATE TABLE `calendar-entries` (
  `Text` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  `Time` time(4) NOT NULL,
  `Type` varchar(11) NOT NULL,
  `ID` int(255) NOT NULL,
  `UserID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `User-credentials`
--

CREATE TABLE `User-credentials` (
  `Nick` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='User table';

--
-- Dumping data for table `User-credentials`
--

INSERT INTO `User-credentials` (`Nick`, `password`, `userID`) VALUES
('Ruffy', '123456', 1),
('Musti', '1234', 2),
('Alex', '4321', 3),
('Tarik', '1234', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calendar-entries`
--
ALTER TABLE `calendar-entries`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `User-credentials`
--
ALTER TABLE `User-credentials`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calendar-entries`
--
ALTER TABLE `calendar-entries`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `User-credentials`
--
ALTER TABLE `User-credentials`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
