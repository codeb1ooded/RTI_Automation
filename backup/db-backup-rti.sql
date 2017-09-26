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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO add_rti VALUES("1"," Sarthak","Male","4323/7 Kamla Nagar,Delhi","110007","Delhi","India","22222222","9999911111","sarthak123@gmail.com","Indian","2017-08-28","2017-08-29","1","yes","2017-10-02","Cash","","","yes");
INSERT INTO add_rti VALUES("2","Megha","Female","44B/3,Yamuna Vihar,Delhi","110004","Delhi","India","64652222","9211557755","codeb1ooded@gmail.com","Indian","2017-11-25","2017-11-30","5","yes","2017-11-25","DD","0","0","yes");
INSERT INTO add_rti VALUES("3"," Saloni","Female","2341, Shastri Nagar, Delhi","110005","Delhi","India","23842323","9211134232","saloniBhartia@gmail.com","Indian","2017-09-03","2017-09-03","0","yes","2017-08-03","Cash","1","","");
INSERT INTO add_rti VALUES("4","Arya","Female","232B,Adarsh Nagar,Delhi","110004","Delhi","Indian","64652222","9211557755","AryaStark12@gmail.com","Indian","2017-10-10","2017-10-10","0","yes","2017-11-25","DD","0","0","yes");



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

INSERT INTO  article_section VALUES("1","1(a)","Under this ACT of IT, the following information cannot be provided");
INSERT INTO  article_section VALUES("2","1(b)","Under this act,all personal information of the army cannot be revealed to general public");



DROP TABLE IF EXISTS  article_sub_section;

CREATE TABLE `article_sub_section` (
  `Id` int(11) NOT NULL,
  `sec_id` varchar(11) NOT NULL,
  `No` varchar(10) NOT NULL,
  `Description` varchar(250) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO  article_sub_section VALUES("1","1","1(a)(a)","Under this ACT of IT, the following information cannot be provided");
INSERT INTO  article_sub_section VALUES("2","1","1(a)(b)","Under this act,all personal information of the army cannot be revealed to general public");
INSERT INTO  article_sub_section VALUES("3","2","1(b)(a)","Information pertaining to nation\'s security may not be revealed.");



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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO  info_about_reply VALUES("3","2017-09-10","2017-09-10","  Mail 
			","0"," Yes ");



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

INSERT INTO  reply_queries VALUES("1","1","xxx","","2016-11-17");
INSERT INTO  reply_queries VALUES("1","2","ssss","","2016-11-17");
INSERT INTO  reply_queries VALUES("3","1","The answer sheet can be collected within next week from the academics division b","sub section desc a2","2017-09-08");
INSERT INTO  reply_queries VALUES("1","1","The information requested by the seeker cannot be provided as per given section.","sub section desc a1","2017-08-12");
INSERT INTO  reply_queries VALUES("1","2","The following information is being provided as per users query and can be collec","","2017-08-15");
INSERT INTO  reply_queries VALUES("1","1","Cannot be provided","sub section desc a1","2017-08-12");
INSERT INTO  reply_queries VALUES("1","2","ssss","","2017-08-12");
INSERT INTO  reply_queries VALUES("1","1","Under this act,all personal information of the army cannot be revealed to genera","Under this ACT of IT, the following information cannot be provided","2017-08-10");



DROP TABLE IF EXISTS  section4;

CREATE TABLE `section4` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `info_fee_date` date NOT NULL,
  `info_fee` int(11) NOT NULL,
  `fee_submit_date` date NOT NULL,
  `given_info_date` date NOT NULL,
  `info_time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS  t2;

CREATE TABLE `t2` (
  `id` int(11) NOT NULL,
  `Internal ID` int(11) NOT NULL AUTO_INCREMENT,
  `q_no` int(11) NOT NULL,
  `ques` varchar(200) NOT NULL,
  `map` varchar(50) NOT NULL,
  `date_sent` date NOT NULL,
  `flag` int(11) NOT NULL,
  PRIMARY KEY (`Internal ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO  t2 VALUES("1","1","1","qwerty","Ac","2016-11-17","0");
INSERT INTO  t2 VALUES("1","2","2","qwerty2","Ex","2016-11-17","0");
INSERT INTO  t2 VALUES("4","4","1","dad","Ac","2016-09-30","0");
INSERT INTO  t2 VALUES("3","5","1","To receive answer sheet for the subject OOSE","Ac","2017-09-06","0");



