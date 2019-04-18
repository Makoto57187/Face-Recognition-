-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2019 at 06:05 PM
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
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `class_attendance`
--

CREATE TABLE `class_attendance` (
  `subject_ID` varchar(7) CHARACTER SET utf8mb4 COLLATE utf8mb4_thai_520_w2 NOT NULL COMMENT 'รหัสวิชา',
  `student_ID` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_thai_520_w2 NOT NULL COMMENT 'รหัสนักศึกษา',
  `section` int(3) NOT NULL COMMENT 'section',
  `status` int(2) NOT NULL COMMENT 'สถานะการเข้าชั้นเรียน',
  `score` int(3) NOT NULL COMMENT 'คะแนนการเข้าชั้นเรียน'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `subject_ID` varchar(7) CHARACTER SET utf8mb4 COLLATE utf8mb4_thai_520_w2 NOT NULL COMMENT 'รหัสวิชา',
  `subject_Name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_thai_520_w2 NOT NULL COMMENT 'ชื่อวิชา',
  `section` varchar(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_thai_520_w2 NOT NULL COMMENT 'section',
  `term` varchar(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_thai_520_w2 NOT NULL COMMENT 'เทอม',
  `yearlearn` varchar(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_thai_520_w2 NOT NULL COMMENT 'ปีการศึกษา',
  `time` date NOT NULL,
  `week_num` int(5) NOT NULL,
  `student_num` int(200) NOT NULL,
  `score` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`subject_ID`, `subject_Name`, `section`, `term`, `yearlearn`, `time`, `week_num`, `student_num`, `score`) VALUES
('946-112', 'Example Course', '1', '1', '2562', '0000-00-00', 0, 0, 0),
('946-221', 'Example Course', '2', '1', '2562', '0000-00-00', 0, 0, 0),
('947-111', 'Example Course 4', '2', '2', '2559', '0000-00-00', 0, 0, 0),
('947-223', 'Example Course 3', '3', '3', '2559', '0000-00-00', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `create_course`
--

CREATE TABLE `create_course` (
  `subject_ID` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_thai_520_w2 NOT NULL,
  `teacher_ID` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_thai_520_w2 NOT NULL,
  `student_ID` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_thai_520_w2 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `register_course`
--

CREATE TABLE `register_course` (
  `subject_ID` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_thai_520_w2 NOT NULL,
  `student_ID` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_thai_520_w2 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `score_class_attendance`
--

CREATE TABLE `score_class_attendance` (
  `subject_ID` varchar(10) NOT NULL,
  `status` int(2) NOT NULL,
  `student_ID` varchar(10) NOT NULL,
  `score` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_ID` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_thai_520_w2 NOT NULL COMMENT 'รหัสนักศึกษา',
  `student_Name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_thai_520_w2 NOT NULL COMMENT 'ชื่อนักศึกษา',
  `student_Major` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_thai_520_w2 NOT NULL COMMENT 'สาขา',
  `student_Username` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_thai_520_w2 NOT NULL COMMENT 'stu_username',
  `student_Password` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_thai_520_w2 NOT NULL COMMENT 'stu_password'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_image`
--

CREATE TABLE `student_image` (
  `subject_ID` varchar(10) NOT NULL,
  `student_ID` varchar(10) NOT NULL,
  `student_img` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacher_ID` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_thai_520_w2 NOT NULL COMMENT 'รหัสอาจารย์',
  `teacher_Name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_thai_520_w2 NOT NULL COMMENT 'ชื่ออาจารย์',
  `teacher_Username` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_thai_520_w2 NOT NULL COMMENT 't_username',
  `teacher_Password` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_thai_520_w2 NOT NULL COMMENT 't_password'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class_attendance`
--
ALTER TABLE `class_attendance`
  ADD PRIMARY KEY (`subject_ID`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`subject_ID`);

--
-- Indexes for table `create_course`
--
ALTER TABLE `create_course`
  ADD PRIMARY KEY (`subject_ID`);

--
-- Indexes for table `register_course`
--
ALTER TABLE `register_course`
  ADD PRIMARY KEY (`subject_ID`);

--
-- Indexes for table `score_class_attendance`
--
ALTER TABLE `score_class_attendance`
  ADD PRIMARY KEY (`subject_ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_ID`);

--
-- Indexes for table `student_image`
--
ALTER TABLE `student_image`
  ADD PRIMARY KEY (`subject_ID`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
