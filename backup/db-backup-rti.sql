CREATE DATABASE IF NOT EXISTS rti;

USE rti;

DROP TABLE IF EXISTS add_rti;

CREATE TABLE `add_rti` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `post` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS  appeal_query;

CREATE TABLE `appeal_query` (
  `id` int(15) NOT NULL,
  `q_no` int(15) NOT NULL,
  `query` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS  article_section;

CREATE TABLE `article_section` (
  `Id` int(11) NOT NULL,
  `No` varchar(10) NOT NULL,
  `Description` varchar(350) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO  article_section VALUES("1","1(a)","sectionA Description");
INSERT INTO  article_section VALUES("2","1(b)","sectionB Description");



DROP TABLE IF EXISTS  article_sub_section;

CREATE TABLE `article_sub_section` (
  `Id` int(11) NOT NULL,
  `sec_id` varchar(11) NOT NULL,
  `No` varchar(10) NOT NULL,
  `Description` varchar(250) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO  article_sub_section VALUES("1","1","1(a)(a)","sub section desc a1");
INSERT INTO  article_sub_section VALUES("2","1","1(a)(b)","sub section desc a2");
INSERT INTO  article_sub_section VALUES("3","2","1(b)(a)","sub section desc b1");



DROP TABLE IF EXISTS  dept_reply;

CREATE TABLE `dept_reply` (
  `id` int(15) NOT NULL,
  `query_no` int(15) NOT NULL,
  `map` varchar(10) NOT NULL,
  `answer` varchar(100) NOT NULL,
  `date_reply` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS  first_appeal;

CREATE TABLE `first_appeal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `appeal_info` varchar(50) NOT NULL,
  `transfer_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS  info_about_reply;

CREATE TABLE `info_about_reply` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `holder_receipt_date` date NOT NULL,
  `reply_date` date NOT NULL,
  `reply_mode` varchar(20) NOT NULL,
  `reply_time` int(11) NOT NULL,
  `faa_info` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS  public_authority;

CREATE TABLE `public_authority` (
  `id` int(11) NOT NULL,
  `Asent_date` date NOT NULL,
  `Ainfo` varchar(50) NOT NULL,
  `Areceived_date` date NOT NULL,
  `Atime` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS  reply_queries;

CREATE TABLE `reply_queries` (
  `id` int(11) NOT NULL,
  `q_no` int(11) NOT NULL,
  `ans` varchar(80) NOT NULL,
  `section` varchar(300) NOT NULL,
  `date_received` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS  section4;

CREATE TABLE `section4` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `info_fee_date` date NOT NULL,
  `info_fee` int(11) NOT NULL,
  `fee_submit_date` date NOT NULL,
  `given_info_date` date NOT NULL,
  `info_time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS  t2;

CREATE TABLE `t2` (
  `id` int(11) NOT NULL,
  `q_no` int(11) NOT NULL,
  `ques` varchar(200) NOT NULL,
  `map` varchar(50) NOT NULL,
  `date_sent` date NOT NULL,
  `flag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




