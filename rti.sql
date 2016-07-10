-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 10, 2016 at 10:30 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rti`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_rti`
--

CREATE TABLE `add_rti` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `address` varchar(100) NOT NULL,
  `pin_code` int(11) NOT NULL,
  `state` varchar(20) NOT NULL,
  `country` varchar(10) NOT NULL,
  `phone_no` varchar(15) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  `citizenship` varchar(15) NOT NULL,
  `date_of_receipt` date NOT NULL,
  `date_of_receipt_cio` date NOT NULL,
  `timespan` int(11) NOT NULL,
  `fee_enclosed` varchar(10) NOT NULL,
  `fee_deposit_date` date NOT NULL,
  `pay_mode` varchar(20) NOT NULL,
  `archieve` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_rti`
--

INSERT INTO `add_rti` (`id`, `name`, `gender`, `address`, `pin_code`, `state`, `country`, `phone_no`, `mobile`, `email`, `citizenship`, `date_of_receipt`, `date_of_receipt_cio`, `timespan`, `fee_enclosed`, `fee_deposit_date`, `pay_mode`, `archieve`) VALUES
(1, 'ut', 'Female', 'abc', 110077, 'UP', 'India', '9968813151', '9968813151', 'ut@gmail.com', 'Indian', '2016-07-16', '2016-07-18', 2, 'yes', '2016-07-18', 'DD', 0),
(2, 'xyz', '', '', 0, '', '', '', '', '', 'Indian', '0000-00-00', '0000-00-00', 0, '', '0000-00-00', '', 0),
(3, 'abc', 'Female', 'esdtrgyuij', 110077, 'UP', 'India', '9968813151', '9968813151', 'ut@gmail.com', 'Indian', '2016-07-16', '2016-07-18', 2, 'yes', '2016-07-18', 'DD', 0),
(4, 'blah', 'Male', '', 0, '', 'India', '', '', '', 'Indian', '0000-00-00', '0000-00-00', 0, 'yes', '0000-00-00', '', 1),
(5, 'utkarsha', 'Female', 'abcdef', 110077, 'UP', 'India', '9968813151', '9968813151', 'ut@gmail.com', 'Indian', '2016-07-16', '2016-07-18', 2, 'yes', '2016-07-18', 'DD', 0),
(6, 'woah', 'Male', 'address', 110077, 'Andhra', 'India', '25090133', '9968813151', 'ug@gmail.com', 'Indian', '2016-06-17', '2016-06-18', 1, 'yes', '2016-06-17', 'cash', NULL),
(7, 'woah', 'Male', 'address', 110077, 'Andhra', 'India', '25090133', '9968813151', 'ug@gmail.com', 'Indian', '2016-06-17', '2016-06-18', 1, 'yes', '2016-06-17', 'cash', NULL),
(8, 'Tia', 'Female', 'Bh-3 East shalomar Bagh', 110088, 'Delhi', 'India', '98745874', '8932865258', 's@gmail.com', 'Indian', '2016-06-22', '2016-01-01', 172, 'yes', '2016-06-05', 'DD', 1),
(9, 'tt', 'Male', 'aklSMZKAS', 110088, 'Delhi', 'India', '98258741', '2365410987', 'salonibhartia@ymail.com', 'Indian', '2016-07-08', '2016-07-09', 1, 'yes', '2016-07-08', 'DD', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `appeal_query`
--

CREATE TABLE `appeal_query` (
  `id` int(15) NOT NULL,
  `q_no` int(15) NOT NULL,
  `query` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appeal_query`
--

INSERT INTO `appeal_query` (`id`, `q_no`, `query`, `description`) VALUES
(1, 2, 'def', 'k,lwik,lowqiakiowakiow,klo');

-- --------------------------------------------------------

--
-- Table structure for table `article_section`
--

CREATE TABLE `article_section` (
  `Id` int(11) NOT NULL,
  `No` varchar(10) NOT NULL,
  `Description` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article_section`
--

INSERT INTO `article_section` (`Id`, `No`, `Description`) VALUES
(1, '1(a)', 'tfc edfrygvubhn'),
(2, '1(b)', 'sdctfgvyubhi');

-- --------------------------------------------------------

--
-- Table structure for table `article_sub_section`
--

CREATE TABLE `article_sub_section` (
  `Id` int(11) NOT NULL,
  `sec_id` varchar(11) NOT NULL,
  `No` varchar(10) NOT NULL,
  `Description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article_sub_section`
--

INSERT INTO `article_sub_section` (`Id`, `sec_id`, `No`, `Description`) VALUES
(1, '1', '1(a)(a)', 'blah'),
(2, '1', '1(a)(b)', 'blah blah'),
(3, '2', '1(b)(a)', 'bdfghj');

-- --------------------------------------------------------

--
-- Table structure for table `dept_reply`
--

CREATE TABLE `dept_reply` (
  `id` int(15) NOT NULL,
  `query_no` int(15) NOT NULL,
  `map` varchar(10) NOT NULL,
  `answer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dept_reply`
--

INSERT INTO `dept_reply` (`id`, `query_no`, `map`, `answer`) VALUES
(1, 2, 'HR', 'shwjnsswdysu'),
(1, 2, 'HR', 'shwjnsswdysu'),
(1, 2, 'HR', 'shwjnsswdysu'),
(1, 2, 'HR', 'shwjnsswdysu'),
(1, 2, 'HR', 'shwjnsswdysu'),
(6, 3, 'HR', 'tyrywuw');

-- --------------------------------------------------------

--
-- Table structure for table `first_appeal`
--

CREATE TABLE `first_appeal` (
  `id` int(11) NOT NULL,
  `appeal_info` varchar(50) NOT NULL,
  `transfer_date` date NOT NULL,
  `faa_receipt_date` date NOT NULL,
  `meet_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `first_appeal`
--

INSERT INTO `first_appeal` (`id`, `appeal_info`, `transfer_date`, `faa_receipt_date`, `meet_date`) VALUES
(1, 'dshxsdgwyshx', '2016-05-08', '2016-06-08', '2016-08-25'),
(3, 'dsjxhujdhu', '0000-00-00', '0000-00-00', '0000-00-00'),
(4, 'wersdtfgyhjk', '2017-06-18', '0000-00-00', '0000-00-00'),
(5, 'ghbhytghbgy', '2016-05-08', '2016-06-08', '2016-08-25'),
(6, 'jhuyhjnjuy', '2016-05-08', '2016-06-08', '2016-08-25'),
(7, 'tysbsw', '2016-05-08', '2016-06-08', '2016-08-25'),
(9, 'chjyhnsdcyudcuy', '2016-05-08', '2016-06-08', '2016-08-25');

-- --------------------------------------------------------

--
-- Table structure for table `info_about_reply`
--

CREATE TABLE `info_about_reply` (
  `id` int(11) NOT NULL,
  `holder_receipt_date` date NOT NULL,
  `reply_date` date NOT NULL,
  `reply_mode` varchar(20) NOT NULL,
  `reply_time` int(11) NOT NULL,
  `faa_info` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info_about_reply`
--

INSERT INTO `info_about_reply` (`id`, `holder_receipt_date`, `reply_date`, `reply_mode`, `reply_time`, `faa_info`) VALUES
(1, '0000-00-00', '0000-00-00', 'ghjhuefy', 0, ''),
(4, '0000-00-00', '0000-00-00', 'blablah', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`name`, `password`) VALUES
('ut', 'nathu'),
('pc', 'prachi'),
('admin', 'xyzabc'),
('examination', 'exam'),
('Human Resource', 'HR'),
('Academics', 'Ac'),
('Appellant', 'ap');

-- --------------------------------------------------------

--
-- Table structure for table `public_authority`
--

CREATE TABLE `public_authority` (
  `id` int(11) NOT NULL,
  `Asent_date` date NOT NULL,
  `Ainfo` varchar(50) NOT NULL,
  `Areceived_date` date NOT NULL,
  `Atime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reply_queries`
--

CREATE TABLE `reply_queries` (
  `id` int(11) NOT NULL,
  `q_no` int(11) NOT NULL,
  `ans` varchar(80) NOT NULL,
  `section` varchar(300) NOT NULL,
  `date_received` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reply_queries`
--

INSERT INTO `reply_queries` (`id`, `q_no`, `ans`, `section`, `date_received`) VALUES
(7, 1, 'haha', 'NULL', '2016-06-23'),
(7, 2, 'haha2', 'blah', '2016-06-23'),
(7, 3, 'haha3', 'bdfghj', '2016-06-24'),
(7, 1, 'hahha', 'blah blah', '2016-06-30'),
(7, 2, '', 'blah blah', '0000-00-00'),
(7, 3, '', 'blah blah', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `section4`
--

CREATE TABLE `section4` (
  `id` int(11) NOT NULL,
  `info_fee_date` date NOT NULL,
  `info_fee` int(11) NOT NULL,
  `fee_submit_date` date NOT NULL,
  `given_info_date` date NOT NULL,
  `info_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section4`
--

INSERT INTO `section4` (`id`, `info_fee_date`, `info_fee`, `fee_submit_date`, `given_info_date`, `info_time`) VALUES
(1, '0000-00-00', 0, '0000-00-00', '0000-00-00', 0),
(4, '0000-00-00', 0, '0000-00-00', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `t2`
--

CREATE TABLE `t2` (
  `id` int(11) NOT NULL,
  `q_no` int(11) NOT NULL,
  `ques` varchar(200) NOT NULL,
  `map` varchar(50) NOT NULL,
  `date_sent` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t2`
--

INSERT INTO `t2` (`id`, `q_no`, `ques`, `map`, `date_sent`) VALUES
(1, 1, 'abc', 'Ad', '2016-07-18'),
(1, 2, 'def', 'HR', '2016-07-18'),
(0, 1, 'rdtfgyhbunj', '', '0000-00-00'),
(0, 2, 'sdrtfgvybhnj', '', '0000-00-00'),
(6, 1, 'blah', 'Ac', '2016-06-20'),
(6, 2, 'blah2', 'Ad', '2016-06-20'),
(6, 3, '', 'HR', '2016-06-20'),
(7, 1, 'blah', 'Ex', '2016-06-20'),
(7, 2, 'blah2', 'Ad', '2016-06-20'),
(7, 3, 'blah3', 'HR', '2016-06-20'),
(8, 1, 'hwsxbj', 'Ac', '2016-06-05'),
(8, 2, 'gshgbj', 'Ex', '2016-06-04'),
(9, 1, 'dsnsehjs', 'Ac', '2016-05-08'),
(9, 2, 'wsjh<<HJSH', 'Ex', '2016-05-08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_rti`
--
ALTER TABLE `add_rti`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `first_appeal`
--
ALTER TABLE `first_appeal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info_about_reply`
--
ALTER TABLE `info_about_reply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `public_authority`
--
ALTER TABLE `public_authority`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section4`
--
ALTER TABLE `section4`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_rti`
--
ALTER TABLE `add_rti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `first_appeal`
--
ALTER TABLE `first_appeal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `info_about_reply`
--
ALTER TABLE `info_about_reply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `section4`
--
ALTER TABLE `section4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
