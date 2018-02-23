-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2018 at 03:21 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `examdb`
--
CREATE DATABASE IF NOT EXISTS `examdb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `examdb`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `password`) VALUES
('nnn@gmail.com', 'pass'),
('admin@gmail.com', 'adminpass');

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

DROP TABLE IF EXISTS `answers`;
CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `qstnid` varchar(100) NOT NULL,
  `answers` varchar(20) NOT NULL,
  `correct_answer` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `qstnid`, `answers`, `correct_answer`) VALUES
(130, '5a87c43613798', '8', 1),
(131, '5a87c43613798', '16', 0),
(132, '5a87c43613798', '32', 0),
(133, '5a87c43613798', '4', 0),
(134, '5a87c4b8b0e4a', 'Object oriented lang', 0),
(135, '5a87c4b8b0e4a', 'software', 0),
(136, '5a87c4b8b0e4a', 'structured language', 1),
(137, '5a87c4b8b0e4a', 'structured language', 0),
(138, '5a87c57a6c506', 'made', 0),
(139, '5a87c57a6c506', 'can', 0),
(140, '5a87c57a6c506', 'mak', 0),
(141, '5a87c57a6c506', 'mak', 1),
(142, '5a87c5ee2dc06', 'F12', 0),
(143, '5a87c5ee2dc06', 'F7', 1),
(144, '5a87c5ee2dc06', 'F10', 0),
(145, '5a87c5ee2dc06', 'F9', 0),
(146, '5a87c65cab882', '1996', 1),
(147, '5a87c65cab882', '1998', 0),
(148, '5a87c65cab882', '2000', 0),
(149, '5a87c65cab882', '1988', 0),
(150, '5a87c7076ee34', 'wirless fidelity', 1),
(151, '5a87c7076ee34', 'Wiered Focus', 0),
(152, '5a87c7076ee34', 'Wiered  fidelity', 0),
(153, '5a87c7076ee34', 'wirless Focus', 0),
(154, '5a87c7a8d625b', 'mainframes', 0),
(155, '5a87c7a8d625b', 'minicomputers', 0),
(156, '5a87c7a8d625b', 'miniprocessor', 0),
(157, '5a87c7a8d625b', 'miniprocessor', 1),
(158, '5a87c82d185c9', 'Birdy', 0),
(159, '5a87c82d185c9', 'chip', 0),
(160, '5a87c82d185c9', 'Larry', 1),
(161, '5a87c82d185c9', 'Larry', 0),
(162, '5a87cf5fa9ef8', 'java server page', 1),
(163, '5a87cf5fa9ef8', 'java sequal page', 0),
(164, '5a87cf5fa9ef8', 'java service page', 0),
(165, '5a87cf5fa9ef8', 'java social page', 0);

-- --------------------------------------------------------

--
-- Table structure for table `instructions`
--

DROP TABLE IF EXISTS `instructions`;
CREATE TABLE `instructions` (
  `id` int(20) NOT NULL,
  `qstn_id` varchar(100) NOT NULL,
  `instruction` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructions`
--

INSERT INTO `instructions` (`id`, `qstn_id`, `instruction`) VALUES
(7, '', 'Do  not  resize  (minimize)  the  browser  during  the  test. '),
(8, '', 'Click  the  â€œSubmitâ€  button  to  submit  your  exam. '),
(9, '', 'Your  instructor  will  provide  your  password.  This  password  is  required  to  open   the  exam'),
(10, '', 'The  exam  must  be  completed  in  one  sitting.    You  can  only  open  it  once. '),
(17, '5a87035f4e0c9', 'BE'),
(18, '5a870771db406', 'be cool'),
(23, '5a873354f3554', 'aaaaaa'),
(24, '5a87337584b27', 'bbbbbbbbbbb'),
(25, '5a8734ae73070', 'bbbbbbbbbbb'),
(27, '5a8736e9e79d9', 'hi'),
(28, '5a873705b55ac', 'kkkkkkkkkkkkk'),
(29, '5a873858dfb5b', 'hia'),
(30, '5a8739a91cb34', 'ppppppppppp'),
(32, '5a8745e66fa90', 'pleas'),
(37, '5a87c65cab882', 'hello'),
(41, '5a87cc74e32cb', 'helloo'),
(42, '5a87cf5fa9ef8', 'Be happy');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `qstn_id` varchar(100) NOT NULL,
  `qstn` varchar(100) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `qstn_id`, `qstn`, `type`) VALUES
(45, '5a87c43613798', 'One byte consist of:', 'easy'),
(46, '5a87c4b8b0e4a', 'SQL is a(n)', 'easy'),
(47, '5a87c5ee2dc06', 'shortcut for save as command is', 'easy'),
(48, '5a87c65cab882', 'Google was found in:', 'medium'),
(49, '5a87c7076ee34', 'full form of wifi:', 'medium'),
(50, '5a87c7a8d625b', 'personal computers are also called as:', 'medium'),
(51, '5a87cf5fa9ef8', 'the file extension .jsp stands for', 'hard');

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

DROP TABLE IF EXISTS `score`;
CREATE TABLE `score` (
  `id` int(50) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `total_qn` int(50) NOT NULL,
  `score` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `score`
--

INSERT INTO `score` (`id`, `student_name`, `total_qn`, `score`) VALUES
(1, 'nafi', 0, 0),
(2, 'nafi', 5, 3),
(3, 'nafi', 3, 0),
(4, '', 0, 0),
(5, 'student', 6, 4);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE `students` (
  `rollnumber` int(20) NOT NULL,
  `studentname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`rollnumber`, `studentname`) VALUES
(1, 'mhmd'),
(12345, 'student');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

DROP TABLE IF EXISTS `type`;
CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `type`) VALUES
(0, 'easy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instructions`
--
ALTER TABLE `instructions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `score`
--
ALTER TABLE `score`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`rollnumber`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;
--
-- AUTO_INCREMENT for table `instructions`
--
ALTER TABLE `instructions`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `score`
--
ALTER TABLE `score`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
