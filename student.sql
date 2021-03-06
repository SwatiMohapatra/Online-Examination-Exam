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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD UNIQUE KEY `s_id` (`s_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
