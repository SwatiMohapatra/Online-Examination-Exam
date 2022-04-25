-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2022 at 04:27 PM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exam_question`
--
ALTER TABLE `exam_question`
  ADD PRIMARY KEY (`q_id`,`exam_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
