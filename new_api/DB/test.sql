-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2018 at 08:20 AM
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
(306, 'Rohit ', 'sharma', 'ff', '', '', 'null', 0, 'Other', '2018-08-14 10:23:04', '2018-08-15 23:48:43', 'True'),
(307, 'vikash ', 'sharma', '', '', '', 'null', 0, 'Other', '2018-08-14 10:23:04', '0000-00-00 00:00:00', 'True'),
(309, 'SHARMA', 'NIPUN ', '', '', '', 'null', 0, 'Other', '2018-08-14 10:23:04', '0000-00-00 00:00:00', 'True'),
(310, 'PHAI', 'DFDF', '', '', '', 'null', 0, 'Other', '2018-08-14 10:23:04', '0000-00-00 00:00:00', 'True'),
(311, 'sghakdjfip', 'dfgdfgf', 'dfgfdsfgsdf', 'gdfgdfsgdfg', 'fdgfgsdgdfg', 'B', 0, 'Female', '2018-08-14 13:09:57', '0000-00-00 00:00:00', 'True'),
(312, 'dipfhns', 'fdgfdg', 'gdfgfg', 'dfgdfsd', 'gdfgsdfgdfg', 'B', 0, 'Male', '2018-08-16 10:00:45', '0000-00-00 00:00:00', 'True'),
(313, 'tghfj', 'hnh', 'n', 'n', 'n', 'O', 0, 'Male', '2018-08-16 10:03:17', '0000-00-00 00:00:00', 'True'),
(314, 'h', 'g', 'g', 'gg', 'g', 'AB', 0, 'Female', '2018-08-16 10:03:17', '0000-00-00 00:00:00', 'True'),
(315, 'hhh', 'qqq', '?', ':v', ':v', 'null', 0, 'Other', '2018-08-16 10:03:17', '0000-00-00 00:00:00', 'True'),
(316, '	>:O', '	>:O', '	>:O', '	>:O', '	>:O', 'null', 0, 'Other', '2018-08-16 10:03:17', '0000-00-00 00:00:00', 'True'),
(317, '[[171108522930776]]', '[[171108522930776]]', '[[171108522930776]]', '[[171108522930776]]', '[[171108522930776]]', 'null', 0, 'Other', '2018-08-16 10:03:17', '0000-00-00 00:00:00', 'True'),
(318, 'tghfj', 'hnh', 'n', 'n', 'n', 'O', 0, 'Male', '2018-08-16 10:03:24', '0000-00-00 00:00:00', 'True'),
(319, 'h', 'g', 'g', 'gg', 'g', 'AB', 0, 'Female', '2018-08-16 10:03:24', '0000-00-00 00:00:00', 'True'),
(320, 'hhh', 'qqq', '?', ':v', ':v', 'null', 0, 'Other', '2018-08-16 10:03:24', '0000-00-00 00:00:00', 'True'),
(321, '	>:O', '	>:O', '	>:O', '	>:O', '	>:O', 'null', 0, 'Other', '2018-08-16 10:03:24', '0000-00-00 00:00:00', 'True'),
(322, '[[171108522930776]]', '[[171108522930776]]', '[[171108522930776]]', '[[171108522930776]]', '[[171108522930776]]', 'null', 0, 'Other', '2018-08-16 10:03:24', '0000-00-00 00:00:00', 'True');

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=323;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
