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
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

INSERT INTO add_rti VALUES("1","ut","Female","abc","110077","UP","India","9968813151","9968813151","ut@gmail.com","Indian","2016-07-16","2016-07-18","2","yes","2016-07-18","DD","1","","0");
INSERT INTO add_rti VALUES("3","abc","Female","esdtrgyuij","110077","UP","India","9968813151","9968813151","ut@gmail.com","Indian","2016-07-16","2016-07-18","2","yes","2016-07-18","DD","1","1","0");
INSERT INTO add_rti VALUES("5","utkarsha","Female","abcdef","110077","UP","India","9968813151","9968813151","ut@gmail.com","Indian","2016-07-16","2016-07-18","2","yes","2016-07-18","DD","1","1","0");
INSERT INTO add_rti VALUES("8","Tia","Female","Bh-3 East shalomar Bagh","110088","Delhi","India","98745874","8932865258","s@gmail.com","Indian","2016-06-22","2016-01-01","172","yes","2016-06-05","DD","1","","0");
INSERT INTO add_rti VALUES("9","tt","Male","aklSMZKAS","110088","Delhi","India","98258741","2365410987","salonibhartia@ymail.com","Indian","2016-07-08","2016-07-09","1","yes","2016-07-08","DD","1","","0");
INSERT INTO add_rti VALUES("10","ut","Male","dwarka","110077","Delhi","India","25090133","9968813151","utkarshagoswami@gmail.com","Indian","2016-06-20","2016-06-20","0","yes","2016-06-20","DD","1","1","0");
INSERT INTO add_rti VALUES("11","codebenderut","Male","dwarka","110077","Delhi","India","25090133","9968813151","utkarshagoswami@gmail.com","Indian","2016-06-20","2016-06-21","1","yes","2016-06-21","DD","1","1","0");
INSERT INTO add_rti VALUES("12","Mr Abcd Efgh","Female","fghfjik hjsd","123456","Kerala","India","12345678","1234567890","abcd@domain.com","Indian","2014-12-12","2014-12-12","0","yes","2014-12-12","DD","1","","0");
INSERT INTO add_rti VALUES("13","adad","Male","adad","110004","Bombay","India","64652222","9211557755","bhavyagarg12@gmail.com","Indian","2016-01-02","2016-01-12","10","yes","2016-01-13","dd","1","","0");
INSERT INTO add_rti VALUES("14","Try","Male","bh-109","110099","delhi","India","98765453","6464646464","s@gmail.com","Indian","2016-02-06","2016-02-06","0","yes","2016-02-06","dd","","","0");
INSERT INTO add_rti VALUES("15","asg","Male","nsn","119988","delhi","India","76546453","2435344425","g@n.c","Indian","2016-02-06","2016-02-06","0","yes","2016-02-06","dd","","","0");
INSERT INTO add_rti VALUES("16","Bhavya","Female","123","223121","Delhi","India","64657755","9716777777","abc@abc.in","Indian","2016-10-21","2016-10-21","0","yes","2016-10-21","dd","1","","yes");
INSERT INTO add_rti VALUES("17","Bhavya","Female","123","223121","Delhi","India","64657755","9716777777","abc@abc.in","Indian","2016-10-21","2016-10-21","0","yes","2016-10-21","dd","1","","yes");
INSERT INTO add_rti VALUES("18","Pari","Female","4568,kamla nagar","110004","Bombay","India","64652222","9211557755","bhavyagarg12@gmail.com","Indian","2016-11-25","2016-11-30","5","yes","2016-11-25","dd","1","","yes");
INSERT INTO add_rti VALUES("19","Pari","Female","4568,kamla nagar","110004","Bombay","India","64652222","9211557755","bhavyagarg12@gmail.com","Indian","2016-09-25","2016-09-30","5","yes","2016-09-25","dd","","","yes");
INSERT INTO add_rti VALUES("20"," Pari","Female","4568,kamla nagar","110004","USA","India","64652222","9211557755","bhavyagarg12@gmail.com","Indian","2016-11-25","2016-11-30","5","yes","2016-11-25","dd","","","no");



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
  `answer` varchar(100) NOT NULL,
  `date_reply` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO  dept_reply VALUES("14","1","Ex","ty","0000-00-00");
INSERT INTO  dept_reply VALUES("14","2","Ex","","0000-00-00");
INSERT INTO  dept_reply VALUES("14","3","Ex","kerkermf","0000-00-00");
INSERT INTO  dept_reply VALUES("14","4","Ex","","0000-00-00");
INSERT INTO  dept_reply VALUES("14","1","Ex","ty","0000-00-00");
INSERT INTO  dept_reply VALUES("14","2","Ex","sjnasjaj","0000-00-00");
INSERT INTO  dept_reply VALUES("14","3","Ex","kerkermf","0000-00-00");
INSERT INTO  dept_reply VALUES("14","4","Ex","xsakjnxska","0000-00-00");
INSERT INTO  dept_reply VALUES("14","1","Ex","ty","0000-00-00");
INSERT INTO  dept_reply VALUES("14","2","Ex","bhbhb hb ","0000-00-00");
INSERT INTO  dept_reply VALUES("14","3","Ex","kerkermf","0000-00-00");
INSERT INTO  dept_reply VALUES("14","4","Ex","mknmkmnk","0000-00-00");
INSERT INTO  dept_reply VALUES("14","1","Ex","ty","0000-00-00");
INSERT INTO  dept_reply VALUES("14","2","Ex","xsjkanxjksa","0000-00-00");
INSERT INTO  dept_reply VALUES("14","3","Ex","kerkermf","0000-00-00");
INSERT INTO  dept_reply VALUES("14","4","Ex","xzmkmxzks","0000-00-00");
INSERT INTO  dept_reply VALUES("14","1","Ex","ty","0000-00-00");
INSERT INTO  dept_reply VALUES("14","2","Ex","jskanmjsawkn","0000-00-00");
INSERT INTO  dept_reply VALUES("14","3","Ex","kerkermf","0000-00-00");
INSERT INTO  dept_reply VALUES("14","4","Ex","jnkasnxakj","0000-00-00");
INSERT INTO  dept_reply VALUES("14","1","Ex","ty","0000-00-00");
INSERT INTO  dept_reply VALUES("14","2","Ex","jskanmjsawkn","0000-00-00");
INSERT INTO  dept_reply VALUES("14","3","Ex","kerkermf","0000-00-00");
INSERT INTO  dept_reply VALUES("14","4","Ex","jnkasnxakj","0000-00-00");
INSERT INTO  dept_reply VALUES("14","1","Ex","ty","0000-00-00");
INSERT INTO  dept_reply VALUES("14","2","Ex","jskanmjsawkn","0000-00-00");
INSERT INTO  dept_reply VALUES("14","3","Ex","kerkermf","0000-00-00");
INSERT INTO  dept_reply VALUES("14","4","Ex","jnkasnxakj","0000-00-00");
INSERT INTO  dept_reply VALUES("13","1","Ex","swnqkjnzsk","0000-00-00");
INSERT INTO  dept_reply VALUES("15","3","HR","SXKXJNS","0000-00-00");
INSERT INTO  dept_reply VALUES("1","2","HR","SDMKLSC","0000-00-00");
INSERT INTO  dept_reply VALUES("15","1","Ex","xsn","2016-05-03");
INSERT INTO  dept_reply VALUES("15","4","Ex","vgvg","2016-05-03");
INSERT INTO  dept_reply VALUES("20","2","Ex","reply12","2016-12-12");



DROP TABLE IF EXISTS  first_appeal;

CREATE TABLE `first_appeal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `appeal_info` varchar(50) NOT NULL,
  `transfer_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO  first_appeal VALUES("1","dshxsdgwyshx","2016-05-08");
INSERT INTO  first_appeal VALUES("3","dsjxhujdhu","0000-00-00");
INSERT INTO  first_appeal VALUES("5","ghbhytghbgy","2016-05-08");
INSERT INTO  first_appeal VALUES("9","chjyhnsdcyudcuy","2016-05-08");



DROP TABLE IF EXISTS  info_about_reply;

CREATE TABLE `info_about_reply` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `holder_receipt_date` date NOT NULL,
  `reply_date` date NOT NULL,
  `reply_mode` varchar(20) NOT NULL,
  `reply_time` int(11) NOT NULL,
  `faa_info` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

INSERT INTO  info_about_reply VALUES("3","2016-07-19","2016-07-19","paper","3","yes");
INSERT INTO  info_about_reply VALUES("5","2016-07-19","2016-07-19","paper","7","fgj,");
INSERT INTO  info_about_reply VALUES("10","2016-06-21","2016-06-21","paper","0","yes");
INSERT INTO  info_about_reply VALUES("11","2016-06-24","2016-06-24","paper","0","yes");
INSERT INTO  info_about_reply VALUES("12","2016-10-03","2016-10-03","Post","0","Yes");
INSERT INTO  info_about_reply VALUES("13","2016-10-03","2016-10-03","Post","0","Yes");
INSERT INTO  info_about_reply VALUES("14","2016-10-04","2016-10-04","Post","0","Yes");



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
INSERT INTO  reply_queries VALUES("13","1","dddddddddd","","2012-08-09");
INSERT INTO  reply_queries VALUES("14","1","ty","","0000-00-00");
INSERT INTO  reply_queries VALUES("14","2","","","0000-00-00");
INSERT INTO  reply_queries VALUES("14","3","","","0000-00-00");
INSERT INTO  reply_queries VALUES("14","4","","","0000-00-00");



DROP TABLE IF EXISTS  section4;

CREATE TABLE `section4` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `info_fee_date` date NOT NULL,
  `info_fee` int(11) NOT NULL,
  `fee_submit_date` date NOT NULL,
  `given_info_date` date NOT NULL,
  `info_time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO  section4 VALUES("1","0000-00-00","0","0000-00-00","0000-00-00","0");
INSERT INTO  section4 VALUES("4","0000-00-00","0","0000-00-00","0000-00-00","0");



DROP TABLE IF EXISTS  t2;

CREATE TABLE `t2` (
  `id` int(11) NOT NULL,
  `q_no` int(11) NOT NULL,
  `ques` varchar(200) NOT NULL,
  `map` varchar(50) NOT NULL,
  `date_sent` date NOT NULL,
  `flag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO  t2 VALUES("1","1","abc","Ad","2016-07-18","0");
INSERT INTO  t2 VALUES("1","2","def","HR","2016-07-18","1");
INSERT INTO  t2 VALUES("0","1","rdtfgyhbunj","","0000-00-00","0");
INSERT INTO  t2 VALUES("0","2","sdrtfgvybhnj","","0000-00-00","0");
INSERT INTO  t2 VALUES("6","1","blah","Ac","2016-06-20","0");
INSERT INTO  t2 VALUES("6","2","blah2","Ad","2016-06-20","0");
INSERT INTO  t2 VALUES("6","3","","HR","2016-06-20","0");
INSERT INTO  t2 VALUES("7","1","blah","Ex","2016-06-20","0");
INSERT INTO  t2 VALUES("7","2","blah2","Ad","2016-06-20","0");
INSERT INTO  t2 VALUES("7","3","blah3","HR","2016-06-20","0");
INSERT INTO  t2 VALUES("8","1","hwsxbj","Ac","2016-06-05","0");
INSERT INTO  t2 VALUES("8","2","gshgbj","Ex","2016-06-04","0");
INSERT INTO  t2 VALUES("9","1","dsnsehjs","Ac","2016-05-08","0");
INSERT INTO  t2 VALUES("9","2","wsjh<<HJSH","Ex","2016-05-08","0");
INSERT INTO  t2 VALUES("12","1","","Ex","0000-00-00","0");
INSERT INTO  t2 VALUES("12","2","","no_selection3","0000-00-00","0");
INSERT INTO  t2 VALUES("12","3","","no_selection2","0000-00-00","0");
INSERT INTO  t2 VALUES("12","4","","no_selection1","0000-00-00","0");
INSERT INTO  t2 VALUES("13","1","cssdsdczczczc","Ex","0000-00-00","1");
INSERT INTO  t2 VALUES("14","1","try","Ex","2016-05-27","1");
INSERT INTO  t2 VALUES("14","2","try","Ex","2016-05-27","1");
INSERT INTO  t2 VALUES("14","3","trt","Ex","0000-00-00","1");
INSERT INTO  t2 VALUES("14","4","gt","Ex","0000-00-00","1");
INSERT INTO  t2 VALUES("15","1","s","Ex","2016-05-03","1");
INSERT INTO  t2 VALUES("15","2","s","Ac","2016-05-03","0");
INSERT INTO  t2 VALUES("15","3","w","HR","2016-05-03","1");
INSERT INTO  t2 VALUES("15","4","s","Ex","2016-05-03","1");
INSERT INTO  t2 VALUES("0","1","12","Ex","2016-10-05","0");
INSERT INTO  t2 VALUES("0","1","2","Ex","2016-09-16","0");
INSERT INTO  t2 VALUES("0","2","12","Ad","2016-09-16","0");
INSERT INTO  t2 VALUES("16","1","12","Ad","2016-09-21","0");
INSERT INTO  t2 VALUES("17","1","e2","HR","2016-09-21","0");
INSERT INTO  t2 VALUES("17","2","e1","Ac","2016-09-09","0");
INSERT INTO  t2 VALUES("0","1","q1","Ac","2016-11-30","0");
INSERT INTO  t2 VALUES("0","2","q2","Ex","2016-11-30","0");



