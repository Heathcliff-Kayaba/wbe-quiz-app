-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2020 at 09:20 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `answer_id` int(100) NOT NULL,
  `answer_answer` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`answer_id`, `answer_answer`) VALUES
(1, 'KASING-IKSI NG BUKAS'),
(2, 'SANTIAGO 4:13'),
(3, 'TOMMOROW'),
(4, 'KINABUKASAN'),
(5, 'MASASAMA'),
(6, 'DIOS'),
(7, 'DALAWA'),
(8, 'ECLESIASTES 7:17'),
(9, 'PAGKATAKOT SA PANGINOON'),
(10, 'PAGGAWA NG KASAMAAN'),
(11, 'MABABABA AT MATATAAS'),
(12, 'WALA'),
(13, 'NAKIKIBAGAY'),
(14, '1 CORINTO 9:20-22'),
(15, 'LUCAS 14:11'),
(16, 'MAGULANG'),
(17, 'DIOS'),
(18, 'KAPUWA TAO'),
(19, 'HINDI'),
(20, 'TAONG SANGGOL'),
(21, 'HINDI'),
(22, 'ANG PANAHONG UKOL NG DIOS UPANG MAGBIGAY'),
(23, '2 CORINTO 6:2'),
(24, 'SANTIGAO 4:3'),
(25, 'ECLESIASTES 3:1');

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE `record` (
  `record_id` int(100) NOT NULL,
  `record_name` varchar(256) NOT NULL,
  `record_score` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `record`
--

INSERT INTO `record` (`record_id`, `record_name`, `record_score`) VALUES
(1, 'Nehemiah Protacio', 1000),
(2, 'Jerwena', 800),
(3, 'Nehemiah20', 800),
(4, 'NPGaming', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `record_2`
--

CREATE TABLE `record_2` (
  `record_id` int(100) NOT NULL,
  `record_name` varchar(256) NOT NULL,
  `record_score` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `record_2`
--

INSERT INTO `record_2` (`record_id`, `record_name`, `record_score`) VALUES
(1, 'Jean Veras', 1000),
(2, 'Nehemiah Protacio', 0),
(3, 'NPGaming', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `record_3`
--

CREATE TABLE `record_3` (
  `record_id` int(100) NOT NULL,
  `record_name` varchar(256) NOT NULL,
  `record_score` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `record_3`
--

INSERT INTO `record_3` (`record_id`, `record_name`, `record_score`) VALUES
(1, 'Nehemiah Protacio', 0),
(2, 'NPGaming', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `record_4`
--

CREATE TABLE `record_4` (
  `record_id` int(100) NOT NULL,
  `record_name` varchar(256) NOT NULL,
  `record_score` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `record_4`
--

INSERT INTO `record_4` (`record_id`, `record_name`, `record_score`) VALUES
(1, 'Nehemiah Protacio', 0);

-- --------------------------------------------------------

--
-- Table structure for table `record_5`
--

CREATE TABLE `record_5` (
  `record_id` int(100) NOT NULL,
  `record_name` varchar(256) NOT NULL,
  `record_score` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `record_5`
--

INSERT INTO `record_5` (`record_id`, `record_name`, `record_score`) VALUES
(1, 'Nehemiah Protacio', 200),
(2, 'Jerwena Tapia', 800);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`answer_id`);

--
-- Indexes for table `record`
--
ALTER TABLE `record`
  ADD PRIMARY KEY (`record_id`);

--
-- Indexes for table `record_2`
--
ALTER TABLE `record_2`
  ADD PRIMARY KEY (`record_id`);

--
-- Indexes for table `record_3`
--
ALTER TABLE `record_3`
  ADD PRIMARY KEY (`record_id`);

--
-- Indexes for table `record_4`
--
ALTER TABLE `record_4`
  ADD PRIMARY KEY (`record_id`);

--
-- Indexes for table `record_5`
--
ALTER TABLE `record_5`
  ADD PRIMARY KEY (`record_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `answer_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `record`
--
ALTER TABLE `record`
  MODIFY `record_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `record_2`
--
ALTER TABLE `record_2`
  MODIFY `record_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `record_3`
--
ALTER TABLE `record_3`
  MODIFY `record_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `record_4`
--
ALTER TABLE `record_4`
  MODIFY `record_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `record_5`
--
ALTER TABLE `record_5`
  MODIFY `record_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
