-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2018 at 09:30 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_api`
--

CREATE TABLE `student_api` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Fathers_name` varchar(255) NOT NULL,
  `Mothers_name` varchar(255) NOT NULL,
  `StudentClass` varchar(255) NOT NULL,
  `Sector` varchar(255) NOT NULL,
  `Blood_grup` enum('A','O','B','AB','null') NOT NULL DEFAULT 'null',
  `Phone_Number` int(11) NOT NULL,
  `Sex` enum('Male','Female','Other') NOT NULL DEFAULT 'Other',
  `Record_insert_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Student_Record_Update_Time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `Show` enum('True','False') DEFAULT 'True'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_api`
--

INSERT INTO `student_api` (`ID`, `Name`, `Fathers_name`, `Mothers_name`, `StudentClass`, `Sector`, `Blood_grup`, `Phone_Number`, `Sex`, `Record_insert_time`, `Student_Record_Update_Time`, `Show`) VALUES
(323, 'rohit', 'xyz', 'xyz', '', '', 'O', 0, 'Other', '2018-08-21 07:12:41', '0000-00-00 00:00:00', 'True');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_api`
--
ALTER TABLE `student_api`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_api`
--
ALTER TABLE `student_api`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=324;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
