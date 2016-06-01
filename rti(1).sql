-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2016 at 06:28 PM
-- Server version: 10.1.10-MariaDB
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
  `faa_receipt_date` date NOT NULL,
  `meet_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_rti`
--

INSERT INTO `add_rti` (`id`, `name`, `gender`, `address`, `pin_code`, `state`, `country`, `phone_no`, `mobile`, `email`, `citizenship`, `date_of_receipt`, `date_of_receipt_cio`, `timespan`, `fee_enclosed`, `fee_deposit_date`, `pay_mode`, `holder_receipt_date`, `reply_date`, `reply_mode`, `reply_time`, `faa_info`, `info_fee_date`, `info_fee`, `fee_submit_date`, `given_info_date`, `info_time`, `Asent_date`, `Ainfo`, `Areceived_date`, `Atime`, `appeal_info`, `transfer_date`, `faa_receipt_date`, `meet_date`) VALUES
(1, 'Bhavya', 'Female', '4568,kamla nagar', 110007, 'Delhi', 'India', '01164652222', '+919211557755', 'bg@gmail.com', 'Indian', '2016-01-02', '2016-01-12', 10, 'yes', '2016-01-15', 'dd', '2016-01-13', '2016-01-15', '2', 2, 'yes', '2016-01-20', 1000, '2016-01-23', '2016-01-24', 1, '2016-01-25', 'abc', '2016-01-29', 4, 'xyz       ', '2016-01-27', '2016-01-28', '2016-01-29'),
(2, 'Sarthak', 'Male', '', 110008, '', 'India', '', '', '', 'Indian', '0000-00-00', '2016-01-12', 16811, 'yes', '0000-00-00', '', '0000-00-00', '0000-00-00', '0', 0, '', '0000-00-00', 0, '0000-00-00', '0000-00-00', 0, '0000-00-00', '', '0000-00-00', 0, '    ', '0000-00-00', '0000-00-00', '0000-00-00'),
(3, 'salo', 'Male', '', 0, '', 'India', '', '', '', 'Indian', '0000-00-00', '0000-00-00', 0, 'yes', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 0, '', '0000-00-00', 0, '0000-00-00', '0000-00-00', 0, '0000-00-00', '', '0000-00-00', 0, '', '0000-00-00', '0000-00-00', '0000-00-00'),
(4, 'salo', 'Male', '', 0, '', 'India', '', '', '', 'Indian', '2016-05-01', '0000-00-00', 16921, 'yes', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 0, '', '0000-00-00', 0, '0000-00-00', '0000-00-00', 0, '0000-00-00', '', '0000-00-00', 0, '', '0000-00-00', '0000-00-00', '0000-00-00'),
(5, 'lisa', 'Male', '', 0, '', 'India', '', '', '', 'Indian', '2016-01-01', '2016-01-01', 0, 'yes', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 0, '', '0000-00-00', 0, '0000-00-00', '0000-00-00', 0, '0000-00-00', '', '0000-00-00', 0, '', '0000-00-00', '0000-00-00', '0000-00-00'),
(6, '', 'Male', '', 0, '', 'India', '', '', '', 'Indian', '0000-00-00', '0000-00-00', 0, 'yes', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 0, '', '0000-00-00', 0, '0000-00-00', '0000-00-00', 0, '0000-00-00', '', '0000-00-00', 0, '', '0000-00-00', '0000-00-00', '0000-00-00'),
(7, '', 'Male', '', 0, '', 'India', '', '', '', 'Indian', '0000-00-00', '0000-00-00', 0, 'yes', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 0, '', '0000-00-00', 0, '0000-00-00', '0000-00-00', 0, '0000-00-00', '', '0000-00-00', 0, '', '0000-00-00', '0000-00-00', '0000-00-00'),
(8, '', 'Male', '', 0, '', 'India', '', '', '', 'Indian', '0000-00-00', '0000-00-00', 0, 'yes', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 0, '', '0000-00-00', 0, '0000-00-00', '0000-00-00', 0, '0000-00-00', '', '0000-00-00', 0, '', '0000-00-00', '0000-00-00', '0000-00-00'),
(9, '', 'Male', '', 0, '', 'India', '', '', '', 'Indian', '0000-00-00', '0000-00-00', 0, 'yes', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 0, '', '0000-00-00', 0, '0000-00-00', '0000-00-00', 0, '0000-00-00', '', '0000-00-00', 0, '', '0000-00-00', '0000-00-00', '0000-00-00'),
(10, '', 'Male', '', 0, '', 'India', '', '', '', 'Indian', '0000-00-00', '0000-00-00', 0, 'yes', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 0, '', '0000-00-00', 0, '0000-00-00', '0000-00-00', 0, '0000-00-00', '', '0000-00-00', 0, '', '0000-00-00', '0000-00-00', '0000-00-00'),
(11, '', 'Male', '', 0, '', 'India', '', '', '', 'Indian', '0000-00-00', '0000-00-00', 0, 'yes', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 0, '', '0000-00-00', 0, '0000-00-00', '0000-00-00', 0, '0000-00-00', '', '0000-00-00', 0, '', '0000-00-00', '0000-00-00', '0000-00-00');

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
  `fee_info` varchar(50) NOT NULL,
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
-- Table structure for table `t2`
--

CREATE TABLE `t2` (
  `id` int(11) NOT NULL,
  `q_no` int(11) NOT NULL,
  `ques` varchar(200) NOT NULL,
  `map` varchar(50) NOT NULL,
  `ans` varchar(1000) NOT NULL,
  `date_sent` date NOT NULL,
  `date_received` date NOT NULL,
  `days` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t2`
--

INSERT INTO `t2` (`id`, `q_no`, `ques`, `map`, `ans`, `date_sent`, `date_received`, `days`) VALUES
(1, 1, 'ABC', 'Ac', '123', '2016-01-12', '2016-01-20', 8),
(1, 2, 'qrs', 'Ex', '324', '2016-01-12', '2016-01-12', 0),
(2, 1, 'xyz', 'Ad', 'qwerty', '2016-01-12', '2016-01-12', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_rti`
--
ALTER TABLE `add_rti`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `old`
--
ALTER TABLE `old`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_rti`
--
ALTER TABLE `add_rti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
