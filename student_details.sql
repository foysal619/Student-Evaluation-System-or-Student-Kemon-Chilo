-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2018 at 10:13 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_details`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlog`
--

CREATE TABLE `adminlog` (
  `Id` int(11) NOT NULL,
  `ausername` varchar(100) DEFAULT NULL,
  `apassword` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlog`
--

INSERT INTO `adminlog` (`Id`, `ausername`, `apassword`) VALUES
(1, 'admin', 1234),
(2, 'mehedi', 0);

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `S_id` varchar(30) NOT NULL,
  `S_name` varchar(30) NOT NULL,
  `Section` varchar(5) NOT NULL,
  `Semester` varchar(15) NOT NULL,
  `T_name` varchar(30) NOT NULL,
  `C_code` varchar(10) NOT NULL,
  `C_title` varchar(50) NOT NULL,
  `cse111_comment` varchar(500) NOT NULL,
  `T2_name` varchar(200) NOT NULL,
  `C2_title` varchar(200) NOT NULL,
  `C2_code` varchar(200) NOT NULL,
  `C2_comment` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`S_id`, `S_name`, `Section`, `Semester`, `T_name`, `C_code`, `C_title`, `cse111_comment`, `T2_name`, `C2_title`, `C2_code`, `C2_comment`) VALUES
('163-15-8507', 'NAZIM UDDIN', 'E', 'FALL-2018', 'NULL', 'null', 'null', 'null', 'null', 'null', 'null', 'null'),
('163-15-8503', 'MEHEDI HASAN KHAN', 'E', 'FALL-2018', 'Saiful Islam', 'CSE311', 'Database Management System', 'He is a good student in the subject.', 'Rakib Hasan', 'Computer Netword', 'CSE312', 'He is a good student'),
('163-15-8525', 'FOYSAL RAHMAN', 'E', 'FALL-2018', 'Saiful Islam', 'CSE311', 'Database Management System', 'He is very talent student', 'Rakib Hasan', 'Computer Netword', 'CSE312', 'He is a good student');

-- --------------------------------------------------------

--
-- Table structure for table `teacherlog`
--

CREATE TABLE `teacherlog` (
  `Id` int(12) NOT NULL,
  `tusername` varchar(100) DEFAULT NULL,
  `tpassword` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacherlog`
--

INSERT INTO `teacherlog` (`Id`, `tusername`, `tpassword`) VALUES
(1, 'mehedi', 0),
(4, 'admin', 1234);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlog`
--
ALTER TABLE `adminlog`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `teacherlog`
--
ALTER TABLE `teacherlog`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlog`
--
ALTER TABLE `adminlog`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teacherlog`
--
ALTER TABLE `teacherlog`
  MODIFY `Id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
