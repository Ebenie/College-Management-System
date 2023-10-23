-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2023 at 02:09 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wcuecms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_fname` varchar(50) NOT NULL,
  `admin_mname` varchar(50) NOT NULL,
  `admin_lname` varchar(50) NOT NULL,
  `admin_bdate` date NOT NULL,
  `admin_gener` varchar(6) DEFAULT NULL,
  `admin_city` varchar(50) NOT NULL,
  `admin_region` varchar(50) NOT NULL,
  `admin_state` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL,
  `admin_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_fname`, `admin_mname`, `admin_lname`, `admin_bdate`, `admin_gener`, `admin_city`, `admin_region`, `admin_state`, `admin_password`, `admin_email`) VALUES
(1303911, 'Abenezer', 'Abraham', 'Chane', '2013-07-02', 'male', 'Hossana', 'Southern', 'Ethiopia', '123456', 'abeni@gmail.com'),
(1303912, 'yoni', 'esha', 'ame', '0000-00-00', NULL, 'Hossana', 'South', 'Ethiopia', '123321', 'yoni@gmail.com'),
(1303913, 'Roba', 'Abreham', 'sdf', '2023-06-13', NULL, 'ssssssssass', 'South', 'asdefr', '1234', 'rtyy@gmail.com'),
(1303914, 'sasas', 'fwwww', 'Kebede', '2023-06-21', NULL, 'wert', 'wert', 'asdefr', '1234', 'tweqhfasj@gmail.com'),
(1303915, 'Abenen', 'asa', 'Kebede', '2023-06-16', NULL, 'wert', 'wert', 'asdefr', '1234', 'hadnah@gmail.com'),
(1303916, 'wer', 'qwer', 'asd', '2023-06-14', NULL, 'asdf', 'asdf', 'asdf', '1234', 'rtyay@gmail.com'),
(1303917, 'Abenezer', 'qeer', 'Kebede', '2023-06-04', NULL, 'ssssssssass', 'South', 'rty', '54321', 'aaaa@gmail.com'),
(1303918, 'a', 'b', 'n', '2023-06-23', NULL, 'd', 'e', 'w', '123', 'sdf@gmail.com'),
(1303919, 'Ermi', 'fdtgsuai', 'Kebede', '2023-06-17', NULL, 'Dilla', 'hfjk', 'qwer', '1111', 'tweaqhdfgfasj@gmail.com'),
(1303920, 'bnnnnnn', 'nnnnnnnnnnn', 'mmm', '2023-08-03', NULL, 'wert', 'wert', 'Ethiopia', '1234', 'cvxcxcabdi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `advisor`
--

CREATE TABLE `advisor` (
  `advisor_id` int(11) NOT NULL,
  `advisor_name` varchar(50) NOT NULL,
  `advisor_phone` int(50) NOT NULL,
  `advisor_email` varchar(50) NOT NULL,
  `dept_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `advisor`
--

INSERT INTO `advisor` (`advisor_id`, `advisor_name`, `advisor_phone`, `advisor_email`, `dept_id`) VALUES
(10001, 'Abraham', 949266867, 'abraham@gmail.com', 10003),
(10002, 'Shalom', 95837263, 'shallom@gmail.com', 10002),
(10003, 'Wondmagegn', 949253423, 'wonde@gmail.com', 10001);

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE `batch` (
  `batch_id` int(11) NOT NULL,
  `batch_name` varchar(50) NOT NULL,
  `program_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` (`batch_id`, `batch_name`, `program_id`) VALUES
(10001, '1st year ', 10000001),
(10002, '2nd year', 10000001),
(10003, '3rd year ', 10000001),
(10004, '4th year', 10000001);

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` int(11) NOT NULL,
  `book_name` varchar(50) NOT NULL,
  `book_author` varchar(50) NOT NULL,
  `book_ISBN` varchar(50) NOT NULL,
  `stud_id` int(11) NOT NULL,
  `library_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `book_name`, `book_author`, `book_ISBN`, `stud_id`, `library_id`) VALUES
(100001, 'Data Communication &Computer Networking', 'Abraham Silbetz', 'DCCN10001', 10001, 10001),
(100002, 'Data Communication &Computer Networking', 'Abraham Silbetz', 'DCCN10001', 10002, 10001);

-- --------------------------------------------------------

--
-- Table structure for table `classroom`
--

CREATE TABLE `classroom` (
  `class_id` int(11) NOT NULL,
  `class_block` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classroom`
--

INSERT INTO `classroom` (`class_id`, `class_block`) VALUES
(10001, 250),
(10002, 250);

-- --------------------------------------------------------

--
-- Table structure for table `comuting_school`
--

CREATE TABLE `comuting_school` (
  `comp_sch_id` int(11) NOT NULL,
  `comp_sch_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comuting_school`
--

INSERT INTO `comuting_school` (`comp_sch_id`, `comp_sch_name`) VALUES
(10001, 'Computing & Technology College '),
(10002, 'Electrical and Mechanical Engineering'),
(10003, 'Civil & Construction.');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `course_CrHr` int(11) NOT NULL,
  `stud_id` int(11) NOT NULL,
  `enroll_id` int(11) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `sem_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `program_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `course_CrHr`, `stud_id`, `enroll_id`, `dept_id`, `sem_id`, `class_id`, `program_id`) VALUES
(10001, 'Fundamental Database', 5, 10001, 10001, 10001, 10001, 10001, 10000001),
(10002, 'Introduction to Software Engineering', 7, 10001, 10001, 10001, 10001, 10001, 10000001);

-- --------------------------------------------------------

--
-- Table structure for table `courseschedule`
--

CREATE TABLE `courseschedule` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `instructor` varchar(50) NOT NULL,
  `dept_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courseschedule`
--

INSERT INTO `courseschedule` (`course_id`, `course_name`, `instructor`, `dept_id`) VALUES
(10001, 'Fundamental Database', 'Anil Kumar', 10001),
(10002, 'Introduction to Software Engineering', 'Jitendra singh', 10001);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_id` int(11) NOT NULL,
  `dept_name` varchar(50) NOT NULL,
  `headOfDept_name` varchar(50) NOT NULL,
  `head_email` varchar(50) NOT NULL,
  `comp_sch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_id`, `dept_name`, `headOfDept_name`, `head_email`, `comp_sch_id`) VALUES
(10001, 'Software Engineering', 'Mr. Alemayehu', 'alex@gmail.com', 10001),
(10002, 'Computer Science', 'Mr. Yonas ', 'yoni@gmail.com', 10001),
(10003, 'Information System', 'Mr. Daniel', 'dani@gmail.com', 10001),
(10005, 'mechanical Engineering', 'Mr. Haile', 'haile@gmail.com', 10002),
(10029, 'Civil Engineering', 'Mr. Adane', 'adane@gmial.com', NULL),
(10032, 'COTM Engineering', 'Mr. Habtamu', 'abdi@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `enrollment`
--

CREATE TABLE `enrollment` (
  `enroll_id` int(11) NOT NULL,
  `enroll_date` date NOT NULL DEFAULT current_timestamp(),
  `stud_id` int(10) NOT NULL,
  `regist_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enrollment`
--

INSERT INTO `enrollment` (`enroll_id`, `enroll_date`, `stud_id`, `regist_id`) VALUES
(10001, '2023-06-01', 10001, 10001),
(10002, '2023-06-01', 10002, 10001);

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `exam_id` int(11) NOT NULL,
  `exam_date` date NOT NULL,
  `course_id` int(11) NOT NULL,
  `examiner_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`exam_id`, `exam_date`, `course_id`, `examiner_id`) VALUES
(10001, '2022-06-09', 10001, 10001),
(10002, '2022-06-07', 10002, 10002);

-- --------------------------------------------------------

--
-- Table structure for table `examiner`
--

CREATE TABLE `examiner` (
  `examiner_id` int(11) NOT NULL,
  `examiner_fname` varchar(50) NOT NULL,
  `examiner_mname` varchar(50) NOT NULL,
  `examiner_lname` varchar(50) NOT NULL,
  `dept_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `examiner`
--

INSERT INTO `examiner` (`examiner_id`, `examiner_fname`, `examiner_mname`, `examiner_lname`, `dept_id`) VALUES
(10001, 'Tarekegn', 'Takele', 'chala', 10003),
(10002, 'Geremu', 'Teketel', 'Tamene', 10002);

-- --------------------------------------------------------

--
-- Table structure for table `examschedule`
--

CREATE TABLE `examschedule` (
  `exam_sche_id` int(11) NOT NULL,
  `exam_sche_name` varchar(50) NOT NULL,
  `course_id` int(11) NOT NULL,
  `examiner_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `examschedule`
--

INSERT INTO `examschedule` (`exam_sche_id`, `exam_sche_name`, `course_id`, `examiner_id`) VALUES
(10001, '3rd year Software Engineering Mid exam', 10001, 10002),
(10002, '3rd year Software Engineering Final exam', 10001, 10001);

-- --------------------------------------------------------

--
-- Table structure for table `feecategory`
--

CREATE TABLE `feecategory` (
  `categor_id` int(11) NOT NULL,
  `feecategory_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feecategory`
--

INSERT INTO `feecategory` (`categor_id`, `feecategory_name`) VALUES
(10001, 'Register Charge'),
(10002, 'Cost Sharing');

-- --------------------------------------------------------

--
-- Table structure for table `feepayment`
--

CREATE TABLE `feepayment` (
  `pay_id` int(11) NOT NULL,
  `pay_data` date NOT NULL DEFAULT current_timestamp(),
  `pay_type` varchar(50) NOT NULL,
  `stud_id` int(11) NOT NULL,
  `categor_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feepayment`
--

INSERT INTO `feepayment` (`pay_id`, `pay_data`, `pay_type`, `stud_id`, `categor_id`, `amount`) VALUES
(10001, '2023-06-01', 'Transfer', 10001, 10002, 12043);

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE `fees` (
  `fee_id` int(10) NOT NULL,
  `fee_name` varchar(50) NOT NULL,
  `fee_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE `instructor` (
  `instruct_id` int(11) NOT NULL,
  `instruct_fname` varchar(50) NOT NULL,
  `instruct_mname` varchar(50) NOT NULL,
  `instruct_lname` varchar(50) NOT NULL,
  `instruct_bdate` date NOT NULL,
  `instruct_gender` varchar(6) DEFAULT NULL,
  `instruct_city` varchar(50) NOT NULL,
  `instruct_region` varchar(50) NOT NULL,
  `instruct_state` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `instruct_email` varchar(50) NOT NULL,
  `dept_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`instruct_id`, `instruct_fname`, `instruct_mname`, `instruct_lname`, `instruct_bdate`, `instruct_gender`, `instruct_city`, `instruct_region`, `instruct_state`, `password`, `instruct_email`, `dept_id`) VALUES
(10001, 'Feyisa', 'Kedir', 'kedir', '2013-06-14', 'male', 'Shashemene', 'Oromia', 'Ethiopia', '1111', 'feyisoft@gmail.com', 10001),
(10002, 'Wondmagegn', 'Leta', 'Leta', '2013-06-18', 'male', 'Shashemene', 'Oromia', 'Ethiopia', '1111', 'wondmagegn@gmail.com', 10001),
(10003, 'aaa', 'aa', 'aa', '2023-08-04', NULL, 'Dilla', 'wert', 'rty', '1234', 'hanaah@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `library_id` int(11) NOT NULL,
  `library_name` varchar(50) NOT NULL,
  `librarian_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`library_id`, `library_name`, `librarian_name`) VALUES
(10001, 'Techno library', 'Desta Kassa');

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `program_id` int(11) NOT NULL,
  `program_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`program_id`, `program_name`) VALUES
(10000001, 'Degree'),
(20000001, 'Masters'),
(30000001, 'PHD');

-- --------------------------------------------------------

--
-- Table structure for table `registarar`
--

CREATE TABLE `registarar` (
  `regist_id` int(11) NOT NULL,
  `regist_name` varchar(50) NOT NULL,
  `regist_block` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registarar`
--

INSERT INTO `registarar` (`regist_id`, `regist_name`, `regist_block`) VALUES
(10001, 'Engineering1', 126),
(10002, 'Engineering2', 126);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `result_id` int(11) NOT NULL,
  `result` int(100) NOT NULL,
  `grade` varchar(2) NOT NULL,
  `stud_id` int(10) NOT NULL,
  `course_id` int(11) NOT NULL,
  `instruct_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`result_id`, `result`, `grade`, `stud_id`, `course_id`, `instruct_id`) VALUES
(10001, 90, 'D', 10001, 10002, 10001),
(10002, 80, 'C', 10001, 10001, 10002),
(10003, 80, 'A', 10002, 10001, 10003);

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `sem_id` int(11) NOT NULL,
  `sem_level` varchar(50) NOT NULL,
  `sem_start_date` date NOT NULL DEFAULT current_timestamp(),
  `sem_end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`sem_id`, `sem_level`, `sem_start_date`, `sem_end_date`) VALUES
(10001, '1st semester', '2023-06-01', '0000-00-00'),
(10002, '2nd semester', '2023-06-01', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stud_id` int(10) NOT NULL,
  `stud_fname` varchar(50) NOT NULL,
  `stud_mname` varchar(50) NOT NULL,
  `stud_lname` varchar(50) NOT NULL,
  `stud_bdate` date NOT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `stud_city` varchar(50) NOT NULL,
  `stud_region` varchar(50) NOT NULL,
  `stud_state` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `stud_email` varchar(50) NOT NULL,
  `dept_name` varchar(50) NOT NULL,
  `stud_profile` varchar(50) DEFAULT NULL,
  `advisor_id` int(11) DEFAULT NULL,
  `dept_id` int(11) DEFAULT NULL,
  `batch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stud_id`, `stud_fname`, `stud_mname`, `stud_lname`, `stud_bdate`, `gender`, `stud_city`, `stud_region`, `stud_state`, `password`, `stud_email`, `dept_name`, `stud_profile`, `advisor_id`, `dept_id`, `batch_id`) VALUES
(10001, 'Abenezer', 'Abraham', 'Degefe', '2016-06-14', 'male', 'Dilla', 'Southern', 'Ethiopia', '12345', 'abrahamavenue@gmail.com', '', '', 10003, 10001, 10003),
(10002, 'Abdulmejid', 'Obsa', 'Kasa', '2016-06-22', 'male', 'Dodola', 'Oromia', 'Ethiopia', '54321', 'mejid@gmail.com', '', '', 10003, 10001, 10003),
(10026, 'aaaaaaaa', 'aaaaaaaa', 'aaaaaaaa', '2023-07-27', NULL, 'Dilla', 'South', 'Ethiopia', 'wwww', 'ssssssssshfasj@gmail.com', '', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admin_email` (`admin_email`);

--
-- Indexes for table `advisor`
--
ALTER TABLE `advisor`
  ADD PRIMARY KEY (`advisor_id`),
  ADD KEY `dept_id` (`dept_id`);

--
-- Indexes for table `batch`
--
ALTER TABLE `batch`
  ADD PRIMARY KEY (`batch_id`),
  ADD KEY `program_id` (`program_id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `library_id` (`library_id`),
  ADD KEY `stud_id` (`stud_id`);

--
-- Indexes for table `classroom`
--
ALTER TABLE `classroom`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `comuting_school`
--
ALTER TABLE `comuting_school`
  ADD PRIMARY KEY (`comp_sch_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`),
  ADD KEY `course_ibfk_1` (`enroll_id`),
  ADD KEY `dept_id` (`dept_id`),
  ADD KEY `sem_id` (`sem_id`),
  ADD KEY `class_id` (`class_id`),
  ADD KEY `program_id` (`program_id`);

--
-- Indexes for table `courseschedule`
--
ALTER TABLE `courseschedule`
  ADD KEY `course_id` (`course_id`),
  ADD KEY `dept_id` (`dept_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_id`),
  ADD UNIQUE KEY `head_email` (`head_email`),
  ADD KEY `comp_sch_id` (`comp_sch_id`);

--
-- Indexes for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD PRIMARY KEY (`enroll_id`),
  ADD KEY `stud_id` (`stud_id`),
  ADD KEY `regist_id` (`regist_id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`exam_id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `examiner_id` (`examiner_id`);

--
-- Indexes for table `examiner`
--
ALTER TABLE `examiner`
  ADD PRIMARY KEY (`examiner_id`),
  ADD KEY `dept_id` (`dept_id`);

--
-- Indexes for table `examschedule`
--
ALTER TABLE `examschedule`
  ADD PRIMARY KEY (`exam_sche_id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `examiner_id` (`examiner_id`);

--
-- Indexes for table `feecategory`
--
ALTER TABLE `feecategory`
  ADD PRIMARY KEY (`categor_id`);

--
-- Indexes for table `feepayment`
--
ALTER TABLE `feepayment`
  ADD PRIMARY KEY (`pay_id`),
  ADD KEY `feepayment_ibfk_1` (`categor_id`),
  ADD KEY `stud_id` (`stud_id`);

--
-- Indexes for table `fees`
--
ALTER TABLE `fees`
  ADD PRIMARY KEY (`fee_id`);

--
-- Indexes for table `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`instruct_id`),
  ADD KEY `dept_id` (`dept_id`);

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`library_id`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`program_id`);

--
-- Indexes for table `registarar`
--
ALTER TABLE `registarar`
  ADD PRIMARY KEY (`regist_id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`result_id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `result_ibfk_1` (`instruct_id`),
  ADD KEY `stud_id` (`stud_id`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`sem_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stud_id`),
  ADD UNIQUE KEY `stud_email` (`stud_email`),
  ADD KEY `batch_id` (`batch_id`),
  ADD KEY `dept_id` (`dept_id`),
  ADD KEY `student_ibfk_1` (`advisor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1303921;

--
-- AUTO_INCREMENT for table `advisor`
--
ALTER TABLE `advisor`
  MODIFY `advisor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10004;

--
-- AUTO_INCREMENT for table `batch`
--
ALTER TABLE `batch`
  MODIFY `batch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10005;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100003;

--
-- AUTO_INCREMENT for table `classroom`
--
ALTER TABLE `classroom`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10003;

--
-- AUTO_INCREMENT for table `comuting_school`
--
ALTER TABLE `comuting_school`
  MODIFY `comp_sch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10004;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10003;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `dept_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10033;

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `exam_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10003;

--
-- AUTO_INCREMENT for table `examiner`
--
ALTER TABLE `examiner`
  MODIFY `examiner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10003;

--
-- AUTO_INCREMENT for table `examschedule`
--
ALTER TABLE `examschedule`
  MODIFY `exam_sche_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10003;

--
-- AUTO_INCREMENT for table `feecategory`
--
ALTER TABLE `feecategory`
  MODIFY `categor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10003;

--
-- AUTO_INCREMENT for table `fees`
--
ALTER TABLE `fees`
  MODIFY `fee_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `instructor`
--
ALTER TABLE `instructor`
  MODIFY `instruct_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10004;

--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `library_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100003;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `program_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30000002;

--
-- AUTO_INCREMENT for table `registarar`
--
ALTER TABLE `registarar`
  MODIFY `regist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10003;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `result_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10004;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `sem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10003;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `stud_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10027;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `advisor`
--
ALTER TABLE `advisor`
  ADD CONSTRAINT `advisor_ibfk_1` FOREIGN KEY (`dept_id`) REFERENCES `department` (`dept_id`);

--
-- Constraints for table `batch`
--
ALTER TABLE `batch`
  ADD CONSTRAINT `batch_ibfk_1` FOREIGN KEY (`program_id`) REFERENCES `program` (`program_id`);

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`library_id`) REFERENCES `library` (`library_id`),
  ADD CONSTRAINT `book_ibfk_2` FOREIGN KEY (`stud_id`) REFERENCES `student` (`stud_id`);

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`dept_id`) REFERENCES `department` (`dept_id`),
  ADD CONSTRAINT `course_ibfk_2` FOREIGN KEY (`sem_id`) REFERENCES `semester` (`sem_id`),
  ADD CONSTRAINT `course_ibfk_3` FOREIGN KEY (`class_id`) REFERENCES `classroom` (`class_id`),
  ADD CONSTRAINT `course_ibfk_4` FOREIGN KEY (`program_id`) REFERENCES `program` (`program_id`);

--
-- Constraints for table `courseschedule`
--
ALTER TABLE `courseschedule`
  ADD CONSTRAINT `courseschedule_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`),
  ADD CONSTRAINT `courseschedule_ibfk_2` FOREIGN KEY (`dept_id`) REFERENCES `department` (`dept_id`);

--
-- Constraints for table `department`
--
ALTER TABLE `department`
  ADD CONSTRAINT `department_ibfk_1` FOREIGN KEY (`comp_sch_id`) REFERENCES `comuting_school` (`comp_sch_id`);

--
-- Constraints for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD CONSTRAINT `enrollment_ibfk_1` FOREIGN KEY (`stud_id`) REFERENCES `student` (`stud_id`),
  ADD CONSTRAINT `enrollment_ibfk_2` FOREIGN KEY (`regist_id`) REFERENCES `registarar` (`regist_id`);

--
-- Constraints for table `exam`
--
ALTER TABLE `exam`
  ADD CONSTRAINT `exam_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`),
  ADD CONSTRAINT `exam_ibfk_2` FOREIGN KEY (`examiner_id`) REFERENCES `examiner` (`examiner_id`);

--
-- Constraints for table `examiner`
--
ALTER TABLE `examiner`
  ADD CONSTRAINT `examiner_ibfk_1` FOREIGN KEY (`dept_id`) REFERENCES `department` (`dept_id`);

--
-- Constraints for table `examschedule`
--
ALTER TABLE `examschedule`
  ADD CONSTRAINT `examschedule_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`),
  ADD CONSTRAINT `examschedule_ibfk_2` FOREIGN KEY (`examiner_id`) REFERENCES `examiner` (`examiner_id`);

--
-- Constraints for table `feepayment`
--
ALTER TABLE `feepayment`
  ADD CONSTRAINT `feepayment_ibfk_1` FOREIGN KEY (`categor_id`) REFERENCES `feecategory` (`categor_id`),
  ADD CONSTRAINT `feepayment_ibfk_2` FOREIGN KEY (`stud_id`) REFERENCES `student` (`stud_id`);

--
-- Constraints for table `instructor`
--
ALTER TABLE `instructor`
  ADD CONSTRAINT `instructor_ibfk_1` FOREIGN KEY (`dept_id`) REFERENCES `department` (`dept_id`);

--
-- Constraints for table `result`
--
ALTER TABLE `result`
  ADD CONSTRAINT `result_ibfk_1` FOREIGN KEY (`instruct_id`) REFERENCES `instructor` (`instruct_id`),
  ADD CONSTRAINT `result_ibfk_2` FOREIGN KEY (`stud_id`) REFERENCES `student` (`stud_id`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`advisor_id`) REFERENCES `advisor` (`advisor_id`),
  ADD CONSTRAINT `student_ibfk_2` FOREIGN KEY (`batch_id`) REFERENCES `batch` (`batch_id`),
  ADD CONSTRAINT `student_ibfk_3` FOREIGN KEY (`dept_id`) REFERENCES `department` (`dept_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
