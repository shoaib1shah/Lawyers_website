-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2024 at 07:13 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(365) NOT NULL,
  `pswd` varchar(365) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `email`, `pswd`) VALUES
(1, 'admin@gmail.com', '123'),
(2, 'admin2@gmail.com', '456');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `app_id` int(11) NOT NULL,
  `lawyer_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `client_phone` int(11) NOT NULL,
  `subject` varchar(365) NOT NULL,
  `details` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`app_id`, `lawyer_id`, `client_id`, `client_phone`, `subject`, `details`, `date`) VALUES
(1, 12, 12, 23234234, 'murder', 'gdfgdfgfd', '2022-11-15'),
(2, 12, 12, 342134, 'electricity', 'fhgdfhgdfghdfg', '2022-11-16'),
(3, 10, 12, 241342, 'property', 'fghfdghdfgh', '2022-11-15'),
(4, 12, 13, 111, 'car', 'fyfhfgvg fgjhgfh', '2022-11-17'),
(5, 10, 15, 111, 'tax', 'hdtfu tyutuhjgfh', '2022-11-17'),
(6, 12, 12, 5435, 'civil', 'tyutrurthrtyhr', '2022-11-18'),
(7, 12, 12, 234324, 'affidavite', 'rthtryhtrh', '2022-11-19'),
(8, 12, 12, 234234, 'article', 'htyh tyhuty jhtyut', '2022-11-21'),
(9, 12, 12, 53453, 'dgff', 'ghfghfgh', '2022-11-24');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(365) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_name`) VALUES
(1, 'Karachi'),
(2, 'Islamabad'),
(3, 'Lahore'),
(4, 'Rawalpindi'),
(5, 'Larkana'),
(6, 'Multan'),
(7, 'Quetta'),
(8, 'Hyderabad'),
(9, 'Faisalabad'),
(10, 'Peshawar'),
(11, 'Sailkot'),
(12, 'Sukkur'),
(13, 'Gujrawala');

-- --------------------------------------------------------

--
-- Table structure for table `clientdata`
--

CREATE TABLE `clientdata` (
  `cid` int(11) NOT NULL,
  `cemail` varchar(365) NOT NULL,
  `cusername` varchar(365) NOT NULL,
  `cpass` text NOT NULL,
  `ccontact` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clientdata`
--

INSERT INTO `clientdata` (`cid`, `cemail`, `cusername`, `cpass`, `ccontact`) VALUES
(12, 'maviak9134@gmail.com', 'maviakhan', '123', 0),
(13, 'maviak@gmail.com', 'umer', '123', 0),
(15, 'mavia@gmail.com', 'umerthree', '123', 0),
(16, 'kjehan181@gmail.com', 'kishwear', '34242', 2147483647),
(17, 'kjehan181@gmail.com', 'kishwear', '34242', 2147483647),
(18, 'demo@yoo.com', 'demo', '123456', 987654321);

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `reason` varchar(100) NOT NULL,
  `urole` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `cname`, `reason`, `urole`) VALUES
(1, 'abc', 'a', 1),
(2, 'abcd', 'a', 1);

-- --------------------------------------------------------

--
-- Table structure for table `lawyerdata`
--

CREATE TABLE `lawyerdata` (
  `lid` int(11) NOT NULL,
  `lname` varchar(365) NOT NULL,
  `wincases` int(11) NOT NULL,
  `experience` int(11) NOT NULL,
  `img` varchar(365) NOT NULL,
  `city_id` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `lemail` varchar(365) NOT NULL,
  `lpassword` varchar(365) NOT NULL,
  `type_id` int(11) NOT NULL,
  `runningcases` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lawyerdata`
--

INSERT INTO `lawyerdata` (`lid`, `lname`, `wincases`, `experience`, `img`, `city_id`, `phone`, `lemail`, `lpassword`, `type_id`, `runningcases`) VALUES
(9, 'maviakhan', 5, 6, 'images.jpg', 1, 5345, 'maviak9134@gmail.com', '123', 7, 0),
(10, 'umer', 4, 6, 'images (1).jpg', 2, 123, 'umer@gmail.com', '123', 7, 0),
(12, 'thomas', 6, 6, 'Justice_K._T._Thomas.jpg', 3, 123, 'thomas@gmail.com', '123', 8, 0),
(13, 'shere ', 6, 6, 'become_a_lawyer.jpg', 1, 1234, 'shere@gmail.com', '123', 11, 0),
(14, 'test', 1, 1, '', 1, 123, 'test@yoo.com', '12345', 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `lawyertype`
--

CREATE TABLE `lawyertype` (
  `type_id` int(11) NOT NULL,
  `types` varchar(365) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lawyertype`
--

INSERT INTO `lawyertype` (`type_id`, `types`) VALUES
(7, 'civil'),
(8, 'corporate'),
(11, 'divorce'),
(13, 'Criminal lawyer'),
(14, 'Divorce lawyer'),
(15, 'Real State lawyer'),
(16, 'Tax lawyer'),
(17, 'Attorny lawyer'),
(18, 'Accidental lawyer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `clientdata`
--
ALTER TABLE `clientdata`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lawyerdata`
--
ALTER TABLE `lawyerdata`
  ADD PRIMARY KEY (`lid`),
  ADD KEY `type_id` (`type_id`),
  ADD KEY `city_id` (`city_id`);

--
-- Indexes for table `lawyertype`
--
ALTER TABLE `lawyertype`
  ADD PRIMARY KEY (`type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `app_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `clientdata`
--
ALTER TABLE `clientdata`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lawyerdata`
--
ALTER TABLE `lawyerdata`
  MODIFY `lid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `lawyertype`
--
ALTER TABLE `lawyertype`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
