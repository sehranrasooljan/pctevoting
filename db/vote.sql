-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2022 at 04:07 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vote`
--

-- --------------------------------------------------------

--
-- Table structure for table `nominees`
--

CREATE TABLE `nominees` (
  `sno` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `batch` int(11) NOT NULL,
  `course` varchar(40) NOT NULL,
  `section` varchar(5) NOT NULL,
  `mobile` int(11) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `club` varchar(40) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nominees`
--

INSERT INTO `nominees` (`sno`, `name`, `batch`, `course`, `section`, `mobile`, `designation`, `club`, `timestamp`) VALUES
(2, 'ahan', 2017, 'MBA', 'A', 12112, 'President', 'Cricket', '2021-12-12 07:21:24'),
(4, 'Yaqoob', 2017, 'BHMCT', 'C', 111, 'Vice President', 'Cricket', '2021-12-12 07:33:03'),
(13, 'shanu', 2019, 'bca', 'A', 987654465, 'president', 'cricket', '2021-12-25 07:06:33'),
(26, 'abrar', 2020, 'MBA', 'D', 8766879, 'Secretary', 'Cricket', '2021-12-18 08:01:49'),
(28, 'asit', 2020, 'BAJMC', 'C', 86897687, 'General Secretary', 'Cricket', '2021-12-18 08:02:26'),
(29, 'sifan', 2021, 'B.Sc Biotech', 'A', 3222, 'Secretary', 'Cricket', '2021-12-18 08:02:51'),
(30, 'arif', 2020, 'BTTM', 'B', 9789868, 'Secretary', 'Cricket', '2021-12-18 08:03:14'),
(31, 'shavaiz', 2019, 'Bsc MLS', 'B', 989880, 'President', 'Cricket', '2021-12-19 10:33:35'),
(32, 'Quaseen', 2020, 'CE', 'A', 9878787, 'Vice President', 'Cricket', '2021-12-21 12:50:19'),
(36, 'akbar', 2019, 'BAJMC', 'B', 97097079, 'Treasurer', 'Cricket', '2021-12-25 07:56:16'),
(38, 'sabir', 2020, 'B.Com Hns', 'A', 2222, 'Vice President', 'Cricket', '2021-12-26 10:13:07'),
(42, 'asrar', 2020, 'BBA', 'B', 122, 'General Secretary', 'Cricket', '2021-12-26 10:17:10'),
(46, 'bmb', 2020, 'BTTM', 'C', 11, 'Vice President', 'Cricket', '2021-12-26 10:27:04'),
(47, 'tanveer', 2021, 'FD', 'C', 11, 'Secretary', 'Cricket', '2021-12-26 10:28:23'),
(49, 'samrid', 2020, 'CSE', 'C', 2222, 'President', 'Cricket', '2021-12-27 17:46:56'),
(50, 'Aurangzeb', 2020, 'ME', 'D', 1121, 'Treasurer', 'Cricket', '2021-12-27 18:35:34'),
(53, 'Tajamul mushtaq', 2019, 'ME', 'C', 11, 'Treasurer', 'Cricket', '2021-12-28 16:46:14'),
(57, 'Manish', 2021, 'BCA', 'D', 21872807, 'Vice President', 'Volleyball', '2022-05-10 04:12:12'),
(58, 'Harsh', 2022, 'CE', 'C', 9832080, 'General Secretary', 'Volleyball', '2022-05-10 04:12:37'),
(59, 'xyz', 2017, 'BCA', 'D', 2989, 'President', 'Volleyball', '2022-05-10 04:13:06'),
(60, 'Sehran', 2021, 'BCA', 'A', 87932, 'Treasurer', 'Volleyball', '2022-05-10 04:13:32'),
(61, 'TEST', 2019, 'CE', 'A', 222, 'Secretary', 'Volleyball', '2022-05-10 04:13:56'),
(62, 'bmb', 2020, 'CSE', 'B', 22, 'President', 'Volleyball', '2022-05-10 04:14:55'),
(63, 'Nitin', 2023, 'Bsc MLS', 'D', 10972, 'President', 'Basketball', '2022-05-10 04:23:02'),
(64, 'shard', 2020, 'BAJMC', 'C', 87669797, 'President', 'Basketball', '2022-05-10 04:23:45'),
(65, 'heena', 2020, 'BCA', 'A', 897097, 'Vice President', 'Basketball', '2022-05-10 04:24:08'),
(66, 'jsaim', 2020, 'CSE', 'B', 8768769, 'Vice President', 'Basketball', '2022-05-10 04:24:31'),
(67, 'harim', 2024, 'MBA', 'B', 8765, 'Treasurer', 'Basketball', '2022-05-10 04:25:03'),
(68, 'Harsh', 2020, 'CE', 'A', 89238, 'President', 'Chess', '2022-05-10 04:25:56'),
(69, 'Ishaan', 2019, 'CE', 'D', 2, 'Select Post', 'Soccer', '2022-05-10 04:26:46');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_login`
--

CREATE TABLE `tbl_admin_login` (
  `sno` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin_login`
--

INSERT INTO `tbl_admin_login` (`sno`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_clubnames`
--

CREATE TABLE `tbl_clubnames` (
  `sno` int(11) NOT NULL,
  `club_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `email` varchar(40) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`email`, `password`) VALUES
('sehran@gmail.com', 'sehran'),
('user@gmail.com', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_result`
--

CREATE TABLE `tbl_result` (
  `sno` int(11) NOT NULL,
  `president` varchar(40) NOT NULL,
  `vice_president` varchar(40) NOT NULL,
  `gen_secretary` varchar(40) NOT NULL,
  `secretary` varchar(40) NOT NULL,
  `treasurer` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vote`
--

CREATE TABLE `tbl_vote` (
  `vote_id` int(11) NOT NULL,
  `president` varchar(40) NOT NULL,
  `vice_president` varchar(40) NOT NULL,
  `gen_secretary` varchar(40) NOT NULL,
  `secretary` varchar(40) NOT NULL,
  `treasurer` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_vote`
--

INSERT INTO `tbl_vote` (`vote_id`, `president`, `vice_president`, `gen_secretary`, `secretary`, `treasurer`) VALUES
(1, '2 ', '32 ', '28 ', '29 ', '35 '),
(3, '2 ', '4 ', '28 ', '30 ', '27 '),
(4, '2 ', '32 ', '28 ', '30 ', '27 '),
(5, '', '', '', '', ''),
(6, '2 ', '4 ', '28 ', '26 ', '27 '),
(7, '2 ', '32 ', '28 ', '30 ', '27 '),
(8, '2 ', '32 ', '28 ', '26 ', ''),
(9, '2', '4', '28', '30', '27'),
(16, '2 ', '32 ', '42 ', '26 ', '36 '),
(17, '31 ', '32 ', '28 ', '29 ', '36 '),
(18, '49 ', '38 ', '42 ', '29 ', '36 '),
(19, '2 ', '46 ', '28 ', '29 ', '36 '),
(20, '49 ', '4 ', '28 ', '30 ', '36 '),
(21, '2 ', '32 ', '42 ', '30 ', '50 '),
(22, '13 ', '38 ', '42 ', '30 ', '50 '),
(23, '13 ', '38 ', '42 ', '30 ', '50 '),
(24, '2 ', '46 ', '52 ', '30 ', '50 '),
(25, '13 ', '38 ', '52 ', '30 ', '53 '),
(26, '49 ', '38 ', '52 ', '47 ', '53 '),
(27, '2 ', '4 ', '28 ', '26 ', '36 '),
(28, '2 ', '32 ', '28 ', '26 ', '36 '),
(29, '2 ', '32 ', '42 ', '29 ', '53 '),
(30, '13 ', '32 ', '42 ', '26 ', '36 '),
(31, '13 ', '4 ', '28 ', '26 ', '36 '),
(32, '13 ', '4 ', '28 ', '29 ', '36 ');

-- --------------------------------------------------------

--
-- Table structure for table `utube`
--

CREATE TABLE `utube` (
  `id` int(11) NOT NULL,
  `year` int(20) NOT NULL,
  `sales` varchar(40) NOT NULL,
  `expenses` varchar(40) NOT NULL,
  `profit` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `utube`
--

INSERT INTO `utube` (`id`, `year`, `sales`, `expenses`, `profit`) VALUES
(1, 2015, '1000', '2000', '200'),
(2, 2016, '3000', '1000', '290');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nominees`
--
ALTER TABLE `nominees`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `tbl_clubnames`
--
ALTER TABLE `tbl_clubnames`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `tbl_vote`
--
ALTER TABLE `tbl_vote`
  ADD PRIMARY KEY (`vote_id`);

--
-- Indexes for table `utube`
--
ALTER TABLE `utube`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nominees`
--
ALTER TABLE `nominees`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `tbl_clubnames`
--
ALTER TABLE `tbl_clubnames`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_vote`
--
ALTER TABLE `tbl_vote`
  MODIFY `vote_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `utube`
--
ALTER TABLE `utube`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
