-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2022 at 04:39 PM
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
-- Database: `fyp`
--

-- --------------------------------------------------------

--
-- Table structure for table `exam_detail`
--

CREATE TABLE `exam_detail` (
  `examid` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `teacher` int(11) DEFAULT NULL,
  `subject` text DEFAULT NULL,
  `totalmarks` int(11) DEFAULT NULL,
  `time` time NOT NULL DEFAULT current_timestamp(),
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam_detail`
--

INSERT INTO `exam_detail` (`examid`, `title`, `teacher`, `subject`, `totalmarks`, `time`, `date`) VALUES
(21, 'test 1', 17, 'toc', 20, '00:00:00', '2022-04-19'),
(24, 'IA 2', 17, 'maths', 10, '00:00:00', '2022-04-19'),
(26, 'toc', 30, 'toc', 20, '00:00:00', '2022-04-21'),
(27, 'AI', 1000, 'sdfsd', 20, '00:00:00', '2022-04-21'),
(29, 'NLP', 1701, ';jkjnk', 70, '00:00:00', '2022-04-22'),
(35, '45', 1701, 'jgdyrs', 45, '838:59:59', '2022-04-24'),
(42, 'khihOU', 1701, 'fyt', 34, '838:59:59', '2022-04-24');

-- --------------------------------------------------------

--
-- Table structure for table `exam_question`
--

CREATE TABLE `exam_question` (
  `q_id` int(10) NOT NULL,
  `question` text DEFAULT NULL,
  `option_A` text DEFAULT NULL,
  `option_B` text DEFAULT NULL,
  `option_C` text DEFAULT NULL,
  `option_D` text DEFAULT NULL,
  `ans` varchar(1) DEFAULT NULL,
  `mark` int(2) DEFAULT 1,
  `exam_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam_question`
--

INSERT INTO `exam_question` (`q_id`, `question`, `option_A`, `option_B`, `option_C`, `option_D`, `ans`, `mark`, `exam_id`) VALUES
(1, 'abc', 'def', 'i', 'i', 'k', 'A', 1, 1),
(1, 'khgyfgfgf', ',bhj', ',mbjkkj', 'jjhhgg', 'gygyg', 'B', 2, 21),
(1, 'zx,cjzkhc', 'er', 'we', 'sdf', 'sdf', 'C', 7, 24),
(1, 'df', 'sdf', 'fsdf', 'sdf', 'fsdf', 'B', 0, 26),
(1, 'dsdad', 'das', 'distjf', 'fsdf', 'sdfs', 'B', 3, 27),
(1, 'lhhjkkj', 'distrubuted computing', 'distjf', 'jhh', 'sdf', 'B', 0, 29),
(1, 'rilhguf', 'ihug', 'khvuyf', 'jvhlj', 'jhfu', 'B', 24, 35),
(1, 'fbiyf', 'hg', 'gkjhg', 'kjhg', 'kjhg', 'A', 56, 42),
(1, 'obfugy', 'lugyfu', 'iyft7', 'oguif7', 'og7fi86', 'A', 34, 45),
(2, 'The following areas where nlp can be useful kshdiuhasdanbsdgasdhashdasdd', 'Automatic Text Summarizatio', ' Information Retrieval', ' Automatic Question-Answering Systems', 'All of these', 'D', 1, 21),
(2, 'dsd', 'sdad', 'distjfs', 'sd', 'sd', 'D', 0, 27),
(2, 'jkhjg', 'distrubuted computing', 'distjf', 'sdf', 'sdf', 'B', 0, 29);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `s_id` varchar(19) NOT NULL,
  `name` varchar(100) NOT NULL,
  `rollno` int(11) NOT NULL,
  `year` int(2) NOT NULL,
  `dept` varchar(20) NOT NULL,
  `division` varchar(2) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `sec_q` varchar(50) DEFAULT NULL,
  `sec_ans` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`s_id`, `name`, `rollno`, `year`, `dept`, `division`, `password`, `sec_q`, `sec_ans`) VALUES
('1000', 'swati', 3, 1, 'comps', 'A', 'swati', 'nickname', 'jfij'),
('17', 'abd', 17, 1, 'comps', 'A', '1', 'subject', 'ds'),
('20', 'mj', 20, 1, 'comps', 'A', '20', 'nickname', 'hghg'),
('2001', 'dhoni', 2001, 1, 'comps', 'A', 'dhoni', 'nickname', 'dhoni'),
('3', 'ashu', 3, 1, 'comps', 'A', '4', 'nickname', 'sdf'),
('30', 'mangu', 30, 1, 'comps', 'A', 'mangu', 'nickname', 'mangu'),
('5', 'sd', 5, 3, 'civil', 'B', 'abc', 'subject', 'abc'),
('7', 'd', 7, 1, 'comps', 'A', 'abcd', 'nickname', 'abcd');

-- --------------------------------------------------------

--
-- Table structure for table `student_answer`
--

CREATE TABLE `student_answer` (
  `s_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `q_id` int(11) NOT NULL,
  `ans` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_answer`
--

INSERT INTO `student_answer` (`s_id`, `exam_id`, `q_id`, `ans`) VALUES
(1000, 35, 1, 'C');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(100) NOT NULL,
  `t_id` varchar(15) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `sec_q` varchar(10) NOT NULL,
  `sec_ans` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `t_id`, `pass`, `sec_q`, `sec_ans`) VALUES
('Swati Mohapatra', '1000', 'swati', 'college', 'dfd'),
('soni', '17', 'soni', 'college', 'asd'),
('Swati1701', '1701', 'swati', 'birth_year', '1701'),
('Swati Mohapatra', '2', 'swati', 'birth_year', '2001'),
('debu', '2001', 'debu', 'subject', 'toc'),
('ashu', '3', 'ashu', 'birth_year', '2003'),
('mangu', '30', 'mangu', 'college', 'dmce'),
('sasmita', '4', 'sasmita', 'birth_year', '1974');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exam_detail`
--
ALTER TABLE `exam_detail`
  ADD PRIMARY KEY (`examid`);

--
-- Indexes for table `exam_question`
--
ALTER TABLE `exam_question`
  ADD PRIMARY KEY (`q_id`,`exam_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD UNIQUE KEY `s_id` (`s_id`);

--
-- Indexes for table `student_answer`
--
ALTER TABLE `student_answer`
  ADD PRIMARY KEY (`s_id`,`exam_id`,`q_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exam_detail`
--
ALTER TABLE `exam_detail`
  MODIFY `examid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
