-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2020 at 03:54 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adms`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `RowId` int(11) NOT NULL,
  `ClassName` varchar(20) DEFAULT NULL,
  `Faculty` varchar(20) DEFAULT NULL,
  `IsActive` int(11) DEFAULT NULL,
  `CreatedBy` varchar(50) DEFAULT NULL,
  `CreatedDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`RowId`, `ClassName`, `Faculty`, `IsActive`, `CreatedBy`, `CreatedDate`) VALUES
(1, 'BCS_Sem1', '1', 1, '', '2019-09-02'),
(2, 'BCS_Sem2', '1', 1, '', '2019-09-02');

-- --------------------------------------------------------

--
-- Table structure for table `classsubject`
--

CREATE TABLE `classsubject` (
  `RowId` int(11) NOT NULL,
  `SubjectName` varchar(20) DEFAULT NULL,
  `Faculty` varchar(20) DEFAULT NULL,
  `Class` varchar(20) DEFAULT NULL,
  `IsActive` int(11) DEFAULT NULL,
  `CreatedBy` varchar(25) DEFAULT NULL,
  `CreateDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classsubject`
--

INSERT INTO `classsubject` (`RowId`, `SubjectName`, `Faculty`, `Class`, `IsActive`, `CreatedBy`, `CreateDate`) VALUES
(1, 'CSC_2000', '1', '1', 1, '', '2019-09-02'),
(2, 'CSC_2000', '1', '1', 1, '', '2019-09-02'),
(3, 'i456', '1', '1', 1, '', '2019-09-02'),
(4, 'mis123', '1', '2', 1, '', '2019-09-02');

-- --------------------------------------------------------

--
-- Table structure for table `csc_200011`
--

CREATE TABLE `csc_200011` (
  `RowId` int(11) NOT NULL,
  `StudentId` int(11) DEFAULT NULL,
  `StudentName` varchar(50) DEFAULT NULL,
  `CSC_20001109_02` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `csc_200011`
--

INSERT INTO `csc_200011` (`RowId`, `StudentId`, `StudentName`, `CSC_20001109_02`) VALUES
(1, 4, 'Anu', 1),
(2, 7, 'saju', 1);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `RowId` int(11) NOT NULL,
  `FacultyName` varchar(20) DEFAULT NULL,
  `IsActive` int(11) DEFAULT NULL,
  `CreatedBy` varchar(20) DEFAULT NULL,
  `CreatedDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`RowId`, `FacultyName`, `IsActive`, `CreatedBy`, `CreatedDate`) VALUES
(1, 'BCS', 1, '', '2019-09-02'),
(2, 'mba', 1, '', '2019-09-02');

-- --------------------------------------------------------

--
-- Table structure for table `i45611`
--

CREATE TABLE `i45611` (
  `RowId` int(11) NOT NULL,
  `StudentId` int(11) DEFAULT NULL,
  `StudentName` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `i45611`
--

INSERT INTO `i45611` (`RowId`, `StudentId`, `StudentName`) VALUES
(1, 4, 'Anu'),
(2, 7, 'saju'),
(3, 8, 'sajeena');

-- --------------------------------------------------------

--
-- Table structure for table `mis12312`
--

CREATE TABLE `mis12312` (
  `RowId` int(11) NOT NULL,
  `StudentId` int(11) DEFAULT NULL,
  `StudentName` varchar(50) DEFAULT NULL,
  `mis1231209_02` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mis12312`
--

INSERT INTO `mis12312` (`RowId`, `StudentId`, `StudentName`, `mis1231209_02`) VALUES
(1, 3, 'om Saha', NULL),
(2, 6, 'saju', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `RowId` int(11) NOT NULL,
  `StudentName` varchar(50) DEFAULT NULL,
  `StudentFaculty` varchar(20) DEFAULT NULL,
  `IsAdmin` varchar(20) DEFAULT NULL,
  `Enrolledclass` varchar(20) DEFAULT NULL,
  `PhoneNo` varchar(20) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `UserId` varchar(20) DEFAULT NULL,
  `UserPWD` varchar(50) DEFAULT NULL,
  `IsActive` int(1) DEFAULT NULL,
  `CreatedBy` varchar(20) DEFAULT NULL,
  `CreatedDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`RowId`, `StudentName`, `StudentFaculty`, `IsAdmin`, `Enrolledclass`, `PhoneNo`, `Email`, `UserId`, `UserPWD`, `IsActive`, `CreatedBy`, `CreatedDate`) VALUES
(1, 'admin', '', 'Yes', ' ', '9805904422', 'admin@systemuser.com', 'admin', 'aaa', 1, '', '2019-08-27'),
(2, 'som Prasad sherestha', '', 'Yes', '', '9863622888', 'system@gmail.com', 'som', 'aaa', 1, '', '2019-08-28'),
(3, 'om Saha', '1', 'No', '2', '9805904422', 'om@gmail.com', 'om', 'aaa', 1, '', '2019-08-28'),
(4, 'Anu', '1', 'No', '1', '04958505', 'anu@gmail.com', '20', 'aaa', 1, '', '2019-09-01'),
(5, 'om Saha', '2', 'No', '3', '94854054', 'oom@gmail.com', '56', 'aaa', 1, '', '2019-09-01'),
(6, 'saju', '1', 'No', '2', '89589678', 'saju@gmail.com', '9', 'aaa', 1, '', '2019-09-01'),
(7, 'saju', '1', 'No', '1', '7657', 'gahfgj@gmail.com', 'sajeena', 'aaa', 1, '', '2019-09-02'),
(8, 'sajeena', '1', 'No', '1', '958045', 'sajeenadahal3@gmail.com', 'sajeena', 'aaa', 1, '', '2019-09-02'),
(9, 'saili', '1', 'No', '1', '85945', 'saili@gmail.com', 'saili', 'aaa', 1, '', '2019-09-02');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `RowId` int(11) NOT NULL,
  `SubjectName` varchar(50) DEFAULT NULL,
  `SubjectCode` varchar(10) DEFAULT NULL,
  `Faculty` varchar(20) DEFAULT NULL,
  `IsActive` int(11) DEFAULT NULL,
  `CreatedBy` varchar(50) DEFAULT NULL,
  `CreatedDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`RowId`, `SubjectName`, `SubjectCode`, `Faculty`, `IsActive`, `CreatedBy`, `CreatedDate`) VALUES
(1, 'Programming Fundamental', 'CSC_2000', '1', 1, '', '2019-09-02'),
(2, 'internet programming', 'i456', '1', 1, '', '2019-09-02'),
(3, 'management', 'mis123', '1', 1, '', '2019-09-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`RowId`);

--
-- Indexes for table `classsubject`
--
ALTER TABLE `classsubject`
  ADD PRIMARY KEY (`RowId`);

--
-- Indexes for table `csc_200011`
--
ALTER TABLE `csc_200011`
  ADD PRIMARY KEY (`RowId`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`RowId`);

--
-- Indexes for table `i45611`
--
ALTER TABLE `i45611`
  ADD PRIMARY KEY (`RowId`);

--
-- Indexes for table `mis12312`
--
ALTER TABLE `mis12312`
  ADD PRIMARY KEY (`RowId`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`RowId`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`RowId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `RowId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `classsubject`
--
ALTER TABLE `classsubject`
  MODIFY `RowId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `csc_200011`
--
ALTER TABLE `csc_200011`
  MODIFY `RowId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `RowId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `i45611`
--
ALTER TABLE `i45611`
  MODIFY `RowId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mis12312`
--
ALTER TABLE `mis12312`
  MODIFY `RowId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `RowId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `RowId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
