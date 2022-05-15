-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2022 at 11:18 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bswo`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `username`, `pass`) VALUES
(1, 'admin', '$2y$10$uK..VUE0CDbZc/2tNFrfGuI96sA5qol8/B4RBG8ao9/hujndbKkqq');

-- --------------------------------------------------------

--
-- Table structure for table `borrowers`
--

CREATE TABLE `borrowers` (
  `type` varchar(10) NOT NULL,
  `number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `borrowers`
--

INSERT INTO `borrowers` (`type`, `number`) VALUES
('m', 1847),
('f', 4890),
('t', 6737);

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE `download` (
  `title` varchar(256) NOT NULL,
  `link` varchar(256) NOT NULL,
  `image` varchar(256) NOT NULL,
  `download_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `download`
--

INSERT INTO `download` (`title`, `link`, `image`, `download_id`) VALUES
('Annual Report 2018-2019', 'https://www.bswo.org.bd/wp-content/uploads/2019/12/Annual_Report_2018-2019__PDF_.pdf', 'mask_right_updated-01.jpg', 1),
('Annual Report 2020-2021', 'https://www.bswo.org.bd/wp-content/uploads/2019/12/Annual_Report_2018-2019__PDF_.pdf', 'logo1.png', 2);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `E_NAME` text DEFAULT NULL,
  `E_POST` text DEFAULT NULL,
  `E_BG` text DEFAULT NULL,
  `E_SDATE` date DEFAULT NULL,
  `E_NID` text DEFAULT NULL,
  `E_MOBILE` text DEFAULT NULL,
  `E_CODE` int(11) DEFAULT NULL,
  `E_IMAGE` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`E_NAME`, `E_POST`, `E_BG`, `E_SDATE`, `E_NID`, `E_MOBILE`, `E_CODE`, `E_IMAGE`) VALUES
('Mizanur Rahman', 'Director (Finance & Admin)', 'A+', '1997-09-01', '19711595707926762', '+8801713110530', 2, 'Mizanur-Rahman-150x150.jpg'),
('Rezia Begum', 'Director', 'A+', '1999-01-01', '1595707644259', '+8801713102547', 1, 'gs.jpg'),
('Rabeya Khatun', 'Unit Manager', 'B+', '2004-11-01', '15950707043769', '01730048930', 3, '5.Rabeya-Khatun-150x150.jpg'),
('Modinullah Al Faruki', 'Unit Manager', 'B+', '2007-09-04', '1518619302175', '01730048940', 4, 'Md.Modinullah-Al-Faruquee-150x150.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `executive`
--

CREATE TABLE `executive` (
  `EC_NAME` varchar(100) NOT NULL,
  `EC_POST` varchar(100) NOT NULL,
  `EC_OCCUP` varchar(100) NOT NULL,
  `EC_EDU` varchar(100) NOT NULL,
  `EC_ADDRESS` varchar(1000) NOT NULL,
  `EC_CODE` int(11) NOT NULL,
  `EC_IMAGE` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `executive`
--

INSERT INTO `executive` (`EC_NAME`, `EC_POST`, `EC_OCCUP`, `EC_EDU`, `EC_ADDRESS`, `EC_CODE`, `EC_IMAGE`) VALUES
('Mahfuza Begum', 'Founder', 'Housewife', '5th Grade', 'House no: 1592, Hamzarbag Colony, Ward No: 07, Post Office: Amin Jute Mills Thana: Panchlaish, Distr', 1, 'founder.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `title` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `date`, `title`, `image`) VALUES
(1, '2022-08-03', 'hi', 'IMG_0132.jpg'),
(2, '2022-03-08', 'ghthdt', '3675591.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `general_committee`
--

CREATE TABLE `general_committee` (
  `GC_NAME` varchar(100) NOT NULL,
  `GC_POST` varchar(100) NOT NULL,
  `GC_OCCUP` varchar(100) NOT NULL,
  `GC_EDU` varchar(100) NOT NULL,
  `GC_ADDRESS` varchar(1000) NOT NULL,
  `GC_CODE` int(11) NOT NULL,
  `GC_IMAGE` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `general_committee`
--

INSERT INTO `general_committee` (`GC_NAME`, `GC_POST`, `GC_OCCUP`, `GC_EDU`, `GC_ADDRESS`, `GC_CODE`, `GC_IMAGE`) VALUES
('Sakina Chowdhury', 'General Member', 'Teacher', 'B.A.B.Ed., L.L.B.', '128, Emdad Villa, KB Mokbul Hossen Villa, Chandanpura, Chawkbazar, Chittagong', 2, 'Sakina-Chy-copy.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `loanout`
--

CREATE TABLE `loanout` (
  `type` varchar(100) NOT NULL,
  `number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loanout`
--

INSERT INTO `loanout` (`type`, `number`) VALUES
('general', 188648164),
('micro', 53730553),
('agriculture', 0),
('others', 0),
('total', 242378717);

-- --------------------------------------------------------

--
-- Table structure for table `loans`
--

CREATE TABLE `loans` (
  `type` varchar(100) NOT NULL,
  `number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loans`
--

INSERT INTO `loans` (`type`, `number`) VALUES
('general', 251185000),
('micro', 5835000),
('agriculture', 0),
('others', 0),
('total', 257020000);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `type` varchar(10) NOT NULL,
  `number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`type`, `number`) VALUES
('m', 2684),
('f', 7402),
('t', 10086);

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `title` varchar(100) NOT NULL,
  `notice_id` int(11) NOT NULL,
  `details` varchar(1000) NOT NULL,
  `image` varchar(100) NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`title`, `notice_id`, `details`, `image`, `date`) VALUES
('Due to the Corona epidemic background, the office will remain closed till 24-July-2021', 1, 'In the context of Corona epidemic, all the daily normal activities of Bonaful Social Welfare Organization will be closed till 10-Shravan-1427/24-July-2021.', '210180582_4400025160021989_4106450778372865069_n.png', '2022-03-08'),
('hi', 2, 'hi', '1.jpg', '2022-03-08'),
('hi', 3, 'hi', '5270355.jpg', '2022-03-08'),
('hii', 4, 'iiii', '3749898.jpg', '0000-00-00'),
('jfghj', 5, 'ghjdgh', '26954.jpg', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `savings`
--

CREATE TABLE `savings` (
  `type` varchar(100) NOT NULL,
  `number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `savings`
--

INSERT INTO `savings` (`type`, `number`) VALUES
('compulsory', 173277068),
('voluntary', 0),
('term', 0),
('total', 173277068);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`download_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`notice_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `download`
--
ALTER TABLE `download`
  MODIFY `download_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
