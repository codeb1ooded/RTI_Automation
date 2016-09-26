-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2016 at 01:18 AM
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
  `closed` int(11) DEFAULT NULL,
  `post` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_rti`
--

INSERT INTO `add_rti` (`id`, `name`, `gender`, `address`, `pin_code`, `state`, `country`, `phone_no`, `mobile`, `email`, `citizenship`, `date_of_receipt`, `date_of_receipt_cio`, `timespan`, `fee_enclosed`, `fee_deposit_date`, `pay_mode`, `archive`, `closed`, `post`) VALUES
(1, 'ut', 'Female', 'abc', 110077, 'UP', 'India', '9968813151', '9968813151', 'ut@gmail.com', 'Indian', '2016-07-16', '2016-07-18', 2, 'yes', '2016-07-18', 'DD', 0, NULL, '0'),
(3, 'abc', 'Female', 'esdtrgyuij', 110077, 'UP', 'India', '9968813151', '9968813151', 'ut@gmail.com', 'Indian', '2016-07-16', '2016-07-18', 2, 'yes', '2016-07-18', 'DD', 1, 1, '0'),
(5, 'utkarsha', 'Female', 'abcdef', 110077, 'UP', 'India', '9968813151', '9968813151', 'ut@gmail.com', 'Indian', '2016-07-16', '2016-07-18', 2, 'yes', '2016-07-18', 'DD', 1, 1, '0'),
(8, 'Tia', 'Female', 'Bh-3 East shalomar Bagh', 110088, 'Delhi', 'India', '98745874', '8932865258', 's@gmail.com', 'Indian', '2016-06-22', '2016-01-01', 172, 'yes', '2016-06-05', 'DD', 1, NULL, '0'),
(9, 'tt', 'Male', 'aklSMZKAS', 110088, 'Delhi', 'India', '98258741', '2365410987', 'salonibhartia@ymail.com', 'Indian', '2016-07-08', '2016-07-09', 1, 'yes', '2016-07-08', 'DD', 1, NULL, '0'),
(10, 'ut', 'Male', 'dwarka', 110077, 'Delhi', 'India', '25090133', '9968813151', 'utkarshagoswami@gmail.com', 'Indian', '2016-06-20', '2016-06-20', 0, 'yes', '2016-06-20', 'DD', 1, 1, '0'),
(11, 'codebenderut', 'Male', 'dwarka', 110077, 'Delhi', 'India', '25090133', '9968813151', 'utkarshagoswami@gmail.com', 'Indian', '2016-06-20', '2016-06-21', 1, 'yes', '2016-06-21', 'DD', 1, 1, '0'),
(12, 'Mr Abcd Efgh', 'Female', 'fghfjik hjsd', 123456, 'Kerala', 'India', '12345678', '1234567890', 'abcd@domain.com', 'Indian', '2014-12-12', '2014-12-12', 0, 'yes', '2014-12-12', 'DD', 1, NULL, '0'),
(13, 'adad', 'Male', 'adad', 110004, 'Bombay', 'India', '64652222', '9211557755', 'bhavyagarg12@gmail.com', 'Indian', '2016-01-02', '2016-01-12', 10, 'yes', '2016-01-13', 'dd', NULL, NULL, '0'),
(14, 'Try', 'Male', 'bh-109', 110099, 'delhi', 'India', '98765453', '6464646464', 's@gmail.com', 'Indian', '2016-02-06', '2016-02-06', 0, 'yes', '2016-02-06', 'dd', NULL, NULL, '0'),
(15, 'asg', 'Male', 'nsn', 119988, 'delhi', 'India', '76546453', '2435344425', 'g@n.c', 'Indian', '2016-02-06', '2016-02-06', 0, 'yes', '2016-02-06', 'dd', NULL, NULL, '0'),
(16, 'Bhavya', 'Female', '123', 223121, 'Delhi', 'India', '64657755', '9716777777', 'abc@abc.in', 'Indian', '2016-10-21', '2016-10-21', 0, 'yes', '2016-10-21', 'dd', NULL, NULL, 'yes'),
(17, 'Bhavya', 'Female', '123', 223121, 'Delhi', 'India', '64657755', '9716777777', 'abc@abc.in', 'Indian', '2016-10-21', '2016-10-21', 0, 'yes', '2016-10-21', 'dd', NULL, NULL, 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `appeal_decision`
--

CREATE TABLE `appeal_decision` (
  `id` int(11) NOT NULL,
  `descision` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appeal_decision`
--

INSERT INTO `appeal_decision` (`id`, `descision`) VALUES
(1, 'smanxnz asnsamzjwsmnxwnmsxz '),
(1, 'smanxnz asnsamzjwsmnxwnmsxz '),
(1, 'smanxnz asnsamzjwsmnxwnmsxz '),
(1, 'smanxnz asnsamzjwsmnxwnmsxz '),
(1, 'smanxnz asnsamzjwsmnxwnmsxz '),
(1, 'smanxnz asnsamzjwsmnxwnmsxz '),
(1, 'smanxnz asnsamzjwsmnxwnmsxz '),
(3, 'bnhjb nhjbn nbjhnb n'),
(3, 'bnhjb nhjbn nbjhnb n'),
(9, ''),
(9, 'done'),
(5, 'done'),
(5, 'de'),
(5, ''),
(5, 'sasa'),
(5, 'working'),
(5, 'perfect'),
(1, 'final');

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
  `answer` varchar(100) NOT NULL,
  `date_reply` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dept_reply`
--

INSERT INTO `dept_reply` (`id`, `query_no`, `map`, `answer`, `date_reply`) VALUES
(14, 1, 'Ex', 'ty', '0000-00-00'),
(14, 2, 'Ex', '', '0000-00-00'),
(14, 3, 'Ex', 'kerkermf', '0000-00-00'),
(14, 4, 'Ex', '', '0000-00-00'),
(14, 1, 'Ex', 'ty', '0000-00-00'),
(14, 2, 'Ex', 'sjnasjaj', '0000-00-00'),
(14, 3, 'Ex', 'kerkermf', '0000-00-00'),
(14, 4, 'Ex', 'xsakjnxska', '0000-00-00'),
(14, 1, 'Ex', 'ty', '0000-00-00'),
(14, 2, 'Ex', 'bhbhb hb ', '0000-00-00'),
(14, 3, 'Ex', 'kerkermf', '0000-00-00'),
(14, 4, 'Ex', 'mknmkmnk', '0000-00-00'),
(14, 1, 'Ex', 'ty', '0000-00-00'),
(14, 2, 'Ex', 'xsjkanxjksa', '0000-00-00'),
(14, 3, 'Ex', 'kerkermf', '0000-00-00'),
(14, 4, 'Ex', 'xzmkmxzks', '0000-00-00'),
(14, 1, 'Ex', 'ty', '0000-00-00'),
(14, 2, 'Ex', 'jskanmjsawkn', '0000-00-00'),
(14, 3, 'Ex', 'kerkermf', '0000-00-00'),
(14, 4, 'Ex', 'jnkasnxakj', '0000-00-00'),
(14, 1, 'Ex', 'ty', '0000-00-00'),
(14, 2, 'Ex', 'jskanmjsawkn', '0000-00-00'),
(14, 3, 'Ex', 'kerkermf', '0000-00-00'),
(14, 4, 'Ex', 'jnkasnxakj', '0000-00-00'),
(14, 1, 'Ex', 'ty', '0000-00-00'),
(14, 2, 'Ex', 'jskanmjsawkn', '0000-00-00'),
(14, 3, 'Ex', 'kerkermf', '0000-00-00'),
(14, 4, 'Ex', 'jnkasnxakj', '0000-00-00'),
(13, 1, 'Ex', 'swnqkjnzsk', '0000-00-00'),
(15, 3, 'HR', 'SXKXJNS', '0000-00-00'),
(1, 2, 'HR', 'SDMKLSC', '0000-00-00'),
(15, 1, 'Ex', 'xsn', '2016-05-03'),
(15, 4, 'Ex', 'vgvg', '2016-05-03');

-- --------------------------------------------------------

--
-- Table structure for table `first_appeal`
--

CREATE TABLE `first_appeal` (
  `id` int(11) NOT NULL,
  `appeal_info` varchar(50) NOT NULL,
  `transfer_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `first_appeal`
--

INSERT INTO `first_appeal` (`id`, `appeal_info`, `transfer_date`) VALUES
(1, 'dshxsdgwyshx', '2016-05-08'),
(3, 'dsjxhujdhu', '0000-00-00'),
(5, 'ghbhytghbgy', '2016-05-08'),
(9, 'chjyhnsdcyudcuy', '2016-05-08');

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
(3, '2016-07-19', '2016-07-19', 'paper', 3, 'yes'),
(5, '2016-07-19', '2016-07-19', 'paper', 7, 'fgj,'),
(10, '2016-06-21', '2016-06-21', 'paper', 0, 'yes'),
(11, '2016-06-24', '2016-06-24', 'paper', 0, 'yes');

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
(1, 'Admin', '', 'ut', '79f274b81e12c73855b278e438a1113b31f8971bd038c779c82304ef3c689288'),
(2, 'Admin', '', 'pc', '1b23b1e9ef4fc64fecf356db55295ef5d77de1374a5af7803a7981badc82b764'),
(3, 'Admin', 'Admin', 'admin', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918'),
(4, 'HOD', 'Examination', 'examination', '5e89e9d8544af15b204bcdff94f047b0c1b60ab8e9c70edbbdd42b3c83b4ad83'),
(5, 'HOD', 'Human Resource', 'Human Resource', '15e68b1f46577e27d82b47596b5bb9224ec847838c53432b4ae182a4e20a04e7'),
(6, 'HOD', 'Academics', 'Academics', '44296048028f384f5a5a62524326847f8105fce79dc2c32b183855a7d9a0e75c'),
(7, 'Appellant', '', 'Appellant', '7978f506baa16285f4f3f6cee4f425c0bd5e06883e37ede4a8d8e62c03d660ef');

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
(7, 3, '', 'blah blah', '0000-00-00'),
(13, 1, 'dddddddddd', '', '2012-08-09'),
(14, 1, 'ty', '', '0000-00-00'),
(14, 2, '', '', '0000-00-00'),
(14, 3, '', '', '0000-00-00'),
(14, 4, '', '', '0000-00-00');

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
  `date_sent` date NOT NULL,
  `flag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t2`
--

INSERT INTO `t2` (`id`, `q_no`, `ques`, `map`, `date_sent`, `flag`) VALUES
(1, 1, 'abc', 'Ad', '2016-07-18', 0),
(1, 2, 'def', 'HR', '2016-07-18', 1),
(0, 1, 'rdtfgyhbunj', '', '0000-00-00', 0),
(0, 2, 'sdrtfgvybhnj', '', '0000-00-00', 0),
(6, 1, 'blah', 'Ac', '2016-06-20', 0),
(6, 2, 'blah2', 'Ad', '2016-06-20', 0),
(6, 3, '', 'HR', '2016-06-20', 0),
(7, 1, 'blah', 'Ex', '2016-06-20', 0),
(7, 2, 'blah2', 'Ad', '2016-06-20', 0),
(7, 3, 'blah3', 'HR', '2016-06-20', 0),
(8, 1, 'hwsxbj', 'Ac', '2016-06-05', 0),
(8, 2, 'gshgbj', 'Ex', '2016-06-04', 0),
(9, 1, 'dsnsehjs', 'Ac', '2016-05-08', 0),
(9, 2, 'wsjh<<HJSH', 'Ex', '2016-05-08', 0),
(12, 1, '', 'Ex', '0000-00-00', 0),
(12, 2, '', 'no_selection3', '0000-00-00', 0),
(12, 3, '', 'no_selection2', '0000-00-00', 0),
(12, 4, '', 'no_selection1', '0000-00-00', 0),
(13, 1, 'cssdsdczczczc', 'Ex', '0000-00-00', 1),
(14, 1, 'try', 'Ex', '2016-05-27', 1),
(14, 2, 'try', 'Ex', '2016-05-27', 1),
(14, 3, 'trt', 'Ex', '0000-00-00', 1),
(14, 4, 'gt', 'Ex', '0000-00-00', 1),
(15, 1, 's', 'Ex', '2016-05-03', 1),
(15, 2, 's', 'Ac', '2016-05-03', 0),
(15, 3, 'w', 'HR', '2016-05-03', 1),
(15, 4, 's', 'Ex', '2016-05-03', 1),
(0, 1, '12', 'Ex', '2016-10-05', 0),
(0, 1, '2', 'Ex', '2016-09-16', 0),
(0, 2, '12', 'Ad', '2016-09-16', 0),
(16, 1, '12', 'Ad', '2016-09-21', 0),
(17, 1, 'e2', 'HR', '2016-09-21', 0),
(17, 2, 'e1', 'Ac', '2016-09-09', 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `first_appeal`
--
ALTER TABLE `first_appeal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `info_about_reply`
--
ALTER TABLE `info_about_reply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `section4`
--
ALTER TABLE `section4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
