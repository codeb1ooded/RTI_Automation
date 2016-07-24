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
  `archieve` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO add_rti VALUES("1","ut","Female","abc","110077","UP","India","9968813151","9968813151","ut@gmail.com","Indian","2016-07-16","2016-07-18","2","yes","2016-07-18","DD","0");
INSERT INTO add_rti VALUES("2","xyz","","","0","","","","","","Indian","0000-00-00","0000-00-00","0","","0000-00-00","","0");
INSERT INTO add_rti VALUES("3","abc","Female","esdtrgyuij","110077","UP","India","9968813151","9968813151","ut@gmail.com","Indian","2016-07-16","2016-07-18","2","yes","2016-07-18","DD","0");
INSERT INTO add_rti VALUES("4","blah","Male","","0","","India","","","","Indian","0000-00-00","0000-00-00","0","yes","0000-00-00","","1");
INSERT INTO add_rti VALUES("5","utkarsha","Female","abcdef","110077","UP","India","9968813151","9968813151","ut@gmail.com","Indian","2016-07-16","2016-07-18","2","yes","2016-07-18","DD","0");
INSERT INTO add_rti VALUES("6","woah","Male","address","110077","Andhra","India","25090133","9968813151","ug@gmail.com","Indian","2016-06-17","2016-06-18","1","yes","2016-06-17","cash","");
INSERT INTO add_rti VALUES("7","woah","Male","address","110077","Andhra","India","25090133","9968813151","ug@gmail.com","Indian","2016-06-17","2016-06-18","1","yes","2016-06-17","cash","");
INSERT INTO add_rti VALUES("8","Tia","Female","Bh-3 East shalomar Bagh","110088","Delhi","India","98745874","8932865258","s@gmail.com","Indian","2016-06-22","2016-01-01","172","yes","2016-06-05","DD","1");
INSERT INTO add_rti VALUES("9","tt","Male","aklSMZKAS","110088","Delhi","India","98258741","2365410987","salonibhartia@ymail.com","Indian","2016-07-08","2016-07-09","1","yes","2016-07-08","DD","");



DROP TABLE IF EXISTS  appeal_query;

CREATE TABLE `appeal_query` (
  `id` int(15) NOT NULL,
  `q_no` int(15) NOT NULL,
  `query` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO  appeal_query VALUES("1","2","def","k,lwik,lowqiakiowakiow,klo");



DROP TABLE IF EXISTS  article_section;

CREATE TABLE `article_section` (
  `Id` int(11) NOT NULL,
  `No` varchar(10) NOT NULL,
  `Description` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO  article_section VALUES("1","1(a)","tfc edfrygvubhn");
INSERT INTO  article_section VALUES("2","1(b)","sdctfgvyubhi");



DROP TABLE IF EXISTS  article_sub_section;

CREATE TABLE `article_sub_section` (
  `Id` int(11) NOT NULL,
  `sec_id` varchar(11) NOT NULL,
  `No` varchar(10) NOT NULL,
  `Description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO  article_sub_section VALUES("1","1","1(a)(a)","blah");
INSERT INTO  article_sub_section VALUES("2","1","1(a)(b)","blah blah");
INSERT INTO  article_sub_section VALUES("3","2","1(b)(a)","bdfghj");



DROP TABLE IF EXISTS  dept_reply;

CREATE TABLE `dept_reply` (
  `id` int(15) NOT NULL,
  `query_no` int(15) NOT NULL,
  `map` varchar(10) NOT NULL,
  `answer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO  dept_reply VALUES("1","2","HR","shwjnsswdysu");
INSERT INTO  dept_reply VALUES("1","2","HR","shwjnsswdysu");
INSERT INTO  dept_reply VALUES("1","2","HR","shwjnsswdysu");
INSERT INTO  dept_reply VALUES("1","2","HR","shwjnsswdysu");
INSERT INTO  dept_reply VALUES("1","2","HR","shwjnsswdysu");
INSERT INTO  dept_reply VALUES("6","3","HR","tyrywuw");



DROP TABLE IF EXISTS  first_appeal;

CREATE TABLE `first_appeal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `appeal_info` varchar(50) NOT NULL,
  `transfer_date` date NOT NULL,
  `faa_receipt_date` date NOT NULL,
  `meet_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO  first_appeal VALUES("1","dshxsdgwyshx","2016-05-08","2016-06-08","2016-08-25");
INSERT INTO  first_appeal VALUES("3","dsjxhujdhu","0000-00-00","0000-00-00","0000-00-00");
INSERT INTO  first_appeal VALUES("4","wersdtfgyhjk","2017-06-18","0000-00-00","0000-00-00");
INSERT INTO  first_appeal VALUES("5","ghbhytghbgy","2016-05-08","2016-06-08","2016-08-25");
INSERT INTO  first_appeal VALUES("6","jhuyhjnjuy","2016-05-08","2016-06-08","2016-08-25");
INSERT INTO  first_appeal VALUES("7","tysbsw","2016-05-08","2016-06-08","2016-08-25");
INSERT INTO  first_appeal VALUES("9","chjyhnsdcyudcuy","2016-05-08","2016-06-08","2016-08-25");



DROP TABLE IF EXISTS  info_about_reply;

CREATE TABLE `info_about_reply` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `holder_receipt_date` date NOT NULL,
  `reply_date` date NOT NULL,
  `reply_mode` varchar(20) NOT NULL,
  `reply_time` int(11) NOT NULL,
  `faa_info` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO  info_about_reply VALUES("1","0000-00-00","0000-00-00","ghjhuefy","0","");
INSERT INTO  info_about_reply VALUES("4","0000-00-00","0000-00-00","blablah","0","");



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

INSERT INTO  reply_queries VALUES("7","1","haha","NULL","2016-06-23");
INSERT INTO  reply_queries VALUES("7","2","haha2","blah","2016-06-23");
INSERT INTO  reply_queries VALUES("7","3","haha3","bdfghj","2016-06-24");
INSERT INTO  reply_queries VALUES("7","1","hahha","blah blah","2016-06-30");
INSERT INTO  reply_queries VALUES("7","2","","blah blah","0000-00-00");
INSERT INTO  reply_queries VALUES("7","3","","blah blah","0000-00-00");



