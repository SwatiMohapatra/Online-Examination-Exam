-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2022 at 04:29 PM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exam_detail`
--
ALTER TABLE `exam_detail`
  ADD PRIMARY KEY (`examid`);

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
