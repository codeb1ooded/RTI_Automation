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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

INSERT INTO add_rti VALUES("1","ut","Female","abc","110077","UP","India","9968813151","9968813151","ut@gmail.com","Indian","2016-07-16","2016-07-18","2","yes","2016-07-18","DD","0","");
INSERT INTO add_rti VALUES("3","abc","Female","esdtrgyuij","110077","UP","India","9968813151","9968813151","ut@gmail.com","Indian","2016-07-16","2016-07-18","2","yes","2016-07-18","DD","1","1");
INSERT INTO add_rti VALUES("5","utkarsha","Female","abcdef","110077","UP","India","9968813151","9968813151","ut@gmail.com","Indian","2016-07-16","2016-07-18","2","yes","2016-07-18","DD","1","1");
INSERT INTO add_rti VALUES("8","Tia","Female","Bh-3 East shalomar Bagh","110088","Delhi","India","98745874","8932865258","s@gmail.com","Indian","2016-06-22","2016-01-01","172","yes","2016-06-05","DD","1","");
INSERT INTO add_rti VALUES("9","tt","Male","aklSMZKAS","110088","Delhi","India","98258741","2365410987","salonibhartia@ymail.com","Indian","2016-07-08","2016-07-09","1","yes","2016-07-08","DD","","");
INSERT INTO add_rti VALUES("10","ut","Male","dwarka","110077","Delhi","India","25090133","9968813151","utkarshagoswami@gmail.com","Indian","2016-06-20","2016-06-20","0","yes","2016-06-20","DD","1","1");
INSERT INTO add_rti VALUES("11","codebenderut","Male","dwarka","110077","Delhi","India","25090133","9968813151","utkarshagoswami@gmail.com","Indian","2016-06-20","2016-06-21","1","yes","2016-06-21","DD","1","1");
INSERT INTO add_rti VALUES("12","Mr Abcd Efgh","Female","fghfjik hjsd","123456","Kerala","India","12345678","1234567890","abcd@domain.com","Indian","2014-12-12","2014-12-12","0","yes","2014-12-12","DD","","");



