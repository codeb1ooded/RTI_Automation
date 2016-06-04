-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2016 at 12:11 PM
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
  `pay_mode` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_rti`
--

INSERT INTO `add_rti` (`id`, `name`, `gender`, `address`, `pin_code`, `state`, `country`, `phone_no`, `mobile`, `email`, `citizenship`, `date_of_receipt`, `date_of_receipt_cio`, `timespan`, `fee_enclosed`, `fee_deposit_date`, `pay_mode`) VALUES
(1, 'bhavya', 'Female', '', 0, '', 'India', '', '', '', 'Indian', '0000-00-00', '0000-00-00', 0, 'yes', '0000-00-00', ''),
(2, 'sarthak', 'Male', '', 0, '', 'India', '', '', '', 'Indian', '0000-00-00', '0000-00-00', 0, 'yes', '0000-00-00', ''),
(3, 'apple', 'Male', '', 0, '', 'India', '', '', '', 'Indian', '0000-00-00', '0000-00-00', 0, 'yes', '0000-00-00', ''),
(4, 'abcd', 'Male', '', 0, '', 'India', '', '', '', 'Indian', '0000-00-00', '0000-00-00', 0, 'yes', '0000-00-00', ''),
(5, 'abcde', 'Male', '', 0, '', 'India', '', '', '', 'Indian', '0000-00-00', '0000-00-00', 0, 'yes', '0000-00-00', ''),
(6, 'bg', 'Female', '', 0, '', 'India', '', '', '', 'Indian', '0000-00-00', '0000-00-00', 0, 'yes', '0000-00-00', ''),
(7, 'qwerty', 'Male', '', 0, '', 'India', '', '', '', 'Indian', '0000-00-00', '0000-00-00', 0, 'yes', '0000-00-00', ''),
(8, 'ff', 'Male', '', 0, '', 'India', '', '', '', 'Indian', '0000-00-00', '0000-00-00', 0, 'yes', '0000-00-00', ''),
(9, 'blah', 'Male', '', 0, '', 'India', '', '', '', 'Indian', '0000-00-00', '0000-00-00', 0, 'yes', '0000-00-00', ''),
(10, 'sarthak12', 'Male', '', 0, '', 'India', '', '', '', 'Indian', '0000-00-00', '0000-00-00', 0, 'yes', '0000-00-00', ''),
(11, 'akad', 'Male', '', 0, '', 'India', '', '', '', 'Indian', '0000-00-00', '0000-00-00', 0, 'yes', '0000-00-00', ''),
(12, 'akals', 'Male', '', 0, '', 'India', '', '', '', 'Indian', '0000-00-00', '0000-00-00', 0, 'yes', '0000-00-00', '');

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

-- --------------------------------------------------------

--
-- Table structure for table `generate_reply`
--

CREATE TABLE `generate_reply` (
  `id` int(11) NOT NULL,
  `info_fee_date` date NOT NULL,
  `info_fee` int(11) NOT NULL,
  `fee_submit_date` date NOT NULL,
  `given_info_date` date NOT NULL,
  `info_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `generate_reply`
--

INSERT INTO `generate_reply` (`id`, `info_fee_date`, `info_fee`, `fee_submit_date`, `given_info_date`, `info_time`) VALUES
(1, '2016-01-20', 1000, '2016-01-23', '2016-01-24', 1),
(2, '0000-00-00', 0, '0000-00-00', '0000-00-00', 0),
(3, '0000-00-00', 0, '0000-00-00', '0000-00-00', 0),
(4, '0000-00-00', 0, '0000-00-00', '0000-00-00', 0);

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
(1, '2016-01-13', '2016-01-15', '2', 2, 'yes'),
(2, '0000-00-00', '0000-00-00', '0', 0, ''),
(3, '0000-00-00', '0000-00-00', '', 0, ''),
(4, '0000-00-00', '0000-00-00', '', 0, '');

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
('ut', 'pc');

-- --------------------------------------------------------

--
-- Table structure for table `old`
--

CREATE TABLE `old` (
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
  `paymode` varchar(20) NOT NULL,
  `holder_receipt_date` date NOT NULL,
  `reply_date` date NOT NULL,
  `reply_mode` varchar(20) NOT NULL,
  `reply_time` int(11) NOT NULL,
  `faa_info` varchar(50) NOT NULL,
  `info_fee_date` date NOT NULL,
  `info_fee` int(11) NOT NULL,
  `fee_submit_date` date NOT NULL,
  `given_info_date` date NOT NULL,
  `info_time` int(11) NOT NULL,
  `Asent_date` date NOT NULL,
  `Ainfo` varchar(50) NOT NULL,
  `Areceived_date` date NOT NULL,
  `Atime` int(11) NOT NULL,
  `appeal_info` varchar(50) NOT NULL,
  `transfer_date` date NOT NULL,
  `fee_receipt_date` date NOT NULL,
  `meet_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `personal_details`
--

CREATE TABLE `personal_details` (
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
  `pay_mode` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal_details`
--

INSERT INTO `personal_details` (`id`, `name`, `gender`, `address`, `pin_code`, `state`, `country`, `phone_no`, `mobile`, `email`, `citizenship`, `date_of_receipt`, `date_of_receipt_cio`, `timespan`, `fee_enclosed`, `fee_deposit_date`, `pay_mode`) VALUES
(1, 'Bhavya', 'Female', '4568,kamla nagar', 110007, 'Delhi', 'India', '01164652222', '+919211557755', 'bg@gmail.com', 'Indian', '2016-01-02', '2016-01-12', 10, 'yes', '2016-01-15', 'dd'),
(2, 'Sarthak', 'Male', '', 110008, '', 'India', '', '', '', 'Indian', '0000-00-00', '2016-01-12', 16811, 'yes', '0000-00-00', ''),
(3, 'abc', 'Male', 'dcgfhjk', 0, '', 'India', '', '', '', 'Indian', '0000-00-00', '0000-00-00', 0, 'yes', '0000-00-00', ''),
(4, 'abc', 'Male', 'dcgfhjk', 0, '', 'India', '', '', '', 'Indian', '0000-00-00', '0000-00-00', 0, 'yes', '0000-00-00', '');

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
(2, 1, '12', 'Ad', '2016-09-12'),
(2, 2, '22', 'Ac', '2016-01-12'),
(5, 1, 'eae', 'Ac', '0000-00-00'),
(5, 2, 'eea', 'Ad', '0000-00-00'),
(6, 1, '123', 'HR', '0000-00-00'),
(6, 2, '13323', 'Ex', '0000-00-00'),
(6, 3, 'qeqe2', 'HR', '0000-00-00'),
(7, 1, 'dad', '', '0000-00-00'),
(7, 2, 'dd', '', '0000-00-00'),
(8, 1, 'edd', 'HR', '0000-00-00'),
(9, 1, 'a', 'Ex', '2016-09-12'),
(9, 2, '1b', 'Ac', '2016-01-12'),
(10, 1, 'xyz', 'Ad', '2012-09-09'),
(10, 2, 'abc', 'Ac', '2016-09-12'),
(10, 3, '1b', 'Ex', '2016-01-12'),
(12, 1, 'qwer', 'HR', '2016-01-12');

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
-- Indexes for table `generate_reply`
--
ALTER TABLE `generate_reply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info_about_reply`
--
ALTER TABLE `info_about_reply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `old`
--
ALTER TABLE `old`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_details`
--
ALTER TABLE `personal_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `public_authority`
--
ALTER TABLE `public_authority`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_rti`
--
ALTER TABLE `add_rti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `first_appeal`
--
ALTER TABLE `first_appeal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `generate_reply`
--
ALTER TABLE `generate_reply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `info_about_reply`
--
ALTER TABLE `info_about_reply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `personal_details`
--
ALTER TABLE `personal_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
