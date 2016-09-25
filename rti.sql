-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2016 at 08:06 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

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
  `archive` int(11) DEFAULT NULL,
  `closed` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_rti`
--

INSERT INTO `add_rti` (`id`, `name`, `gender`, `address`, `pin_code`, `state`, `country`, `phone_no`, `mobile`, `email`, `citizenship`, `date_of_receipt`, `date_of_receipt_cio`, `timespan`, `fee_enclosed`, `fee_deposit_date`, `pay_mode`, `archive`, `closed`) VALUES
(1, 'Bhavya', 'Female', '4568,kamla nagar', 110004, 'Bombay', 'India', '64652222', '9211557755', 'bhavyagarg12@gmail.com', 'Indian', '2016-01-02', '2016-01-12', 10, 'yes', '2016-01-13', 'dd', NULL, NULL),
(2, 'Pari Garg', 'Female', '4568,kamla nagar', 110006, 'Delhi', 'India', '64652222', '9211557755', 'bhavyagarg12@gmail.com', 'Indian', '2016-09-25', '2016-09-30', 5, 'yes', '2016-09-25', 'dd', 1, NULL),
(3, 'Zara', 'Female', '4568,kamla nagar', 110004, 'USA', 'India', '64652222', '9211557755', 'bhavyagarg12@gmail.com', 'Indian', '2016-09-25', '2016-09-30', 5, 'yes', '2016-09-25', 'dd', NULL, NULL);

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
(1, 3, 'Ex', 'Replied by department'),
(3, 4, 'Ex', 'apple'),
(3, 5, 'Ex', 'mango');

-- --------------------------------------------------------

--
-- Table structure for table `first_appeal`
--

CREATE TABLE `first_appeal` (
  `id` int(11) NOT NULL,
  `appeal_info` varchar(50) NOT NULL,
  `transfer_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(2, '2016-10-19', '2016-10-20', 'Post', 1, 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `Account_Type` varchar(20) NOT NULL,
  `DEPARTMENT` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `Account_Type`, `DEPARTMENT`, `name`, `password`) VALUES
(3, 'Admin', 'Admin', 'admin', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918'),
(4, 'HOD', 'Examination', 'examination', '5e89e9d8544af15b204bcdff94f047b0c1b60ab8e9c70edbbdd42b3c83b4ad83'),
(5, 'HOD', 'Human Resource', 'Human Resource', '15e68b1f46577e27d82b47596b5bb9224ec847838c53432b4ae182a4e20a04e7'),
(6, 'HOD', 'Academics', 'Academics', '44296048028f384f5a5a62524326847f8105fce79dc2c32b183855a7d9a0e75c'),
(7, 'Appellant', 'Appellant', 'Appellant', '7978f506baa16285f4f3f6cee4f425c0bd5e06883e37ede4a8d8e62c03d660ef');

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
(2, 1, 'r1', 'blah', '2016-10-12'),
(2, 2, 'r2', 'blah', '2016-10-20'),
(1, 1, '', '', '0000-00-00'),
(1, 2, '', '', '0000-00-00'),
(1, 3, '', '', '0000-00-00'),
(1, 1, '', '', '0000-00-00'),
(1, 2, '', '', '0000-00-00'),
(1, 3, '', '', '0000-00-00'),
(1, 1, '', '', '0000-00-00'),
(1, 2, '', '', '0000-00-00'),
(1, 3, '', '', '0000-00-00'),
(1, 1, '', '', '0000-00-00'),
(1, 2, '', '', '0000-00-00'),
(1, 3, '', '', '0000-00-00'),
(1, 1, '', '', '0000-00-00'),
(1, 2, '', '', '0000-00-00'),
(1, 3, '', '', '0000-00-00');

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
(2, '2016-10-20', 100, '2016-10-23', '2016-10-24', 1);

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
(1, 1, 'queryA', 'Ac', '2016-01-14'),
(1, 2, 'qB', 'Ad', '2016-01-16'),
(1, 3, 'qC', 'Ex', '2016-01-15'),
(2, 1, 'q1', 'Ac', '2016-09-14'),
(2, 2, 'q2', 'Ac', '2016-10-05'),
(3, 1, 'q1', 'Ac', '2016-10-12'),
(3, 2, 'q2', 'Ac', '2016-10-13'),
(3, 3, 'q3', 'Ac', '2016-10-13'),
(3, 4, 'q4', 'Ex', '2016-09-30'),
(3, 5, 'q5', 'Ex', '2016-10-05');

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
-- Indexes for table `login`
--
ALTER TABLE `login`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `first_appeal`
--
ALTER TABLE `first_appeal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `info_about_reply`
--
ALTER TABLE `info_about_reply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `section4`
--
ALTER TABLE `section4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
