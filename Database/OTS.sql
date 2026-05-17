/*
SQLyog Enterprise - MySQL GUI v6.56
MySQL - 5.0.81-community-nt : Database - ots
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`ots` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `ots`;

/*Table structure for table `ots_question` */

DROP TABLE IF EXISTS `ots_question`;

CREATE TABLE `ots_question` (
  `que_id` int(5) NOT NULL auto_increment,
  `test_id` int(5) default NULL,
  `que_desc` varchar(500) default NULL,
  `ans1` varchar(75) default NULL,
  `ans2` varchar(75) default NULL,
  `ans3` varchar(75) default NULL,
  `ans4` varchar(75) default NULL,
  `true_ans` int(1) default NULL,
  PRIMARY KEY  (`que_id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

/*Data for the table `ots_question` */

insert  into `ots_question`(`que_id`,`test_id`,`que_desc`,`ans1`,`ans2`,`ans3`,`ans4`,`true_ans`) values (21,27,'What does PHP stand for?','Personal Home Page','Hypertext Preprocessor','Pretext Hypertext Processor','Preprocessor Home Page',2),(22,27,'PHP files have a default file extension of...',',HTML','.XML','.PHP','.PH',3),(23,27,'PHP files have a default file extension of...',',HTML','.XML','.PHP','.PH',3),(24,27,'A PHP script should start with ___ and end with ___.','< php >','<? ?>','<?php ?>','Both B and C.',4),(25,27,'Which of the following is/are a PHP code editor?','Notepade','Notepade++','Adobe Dreamweaver','All of the mentioned',4),(26,27,'Which of the following must be installed on your computer so as to run PHP script?','PHP','Apache','Adobe Dreamweaver','Both  and B.',4),(27,27,'Which of the following must be installed on your computer so as to run PHP script?','PHP','Apache','Adobe Dreamweaver','Both  and B.',4),(28,27,'Which of the following must be installed on your computer so as to run PHP script?','PHP','Apache','Adobe Dreamweaver','Both  and B.',4),(29,27,'Which of the following must be installed on your computer so as to run PHP script?','PHP','Apache','Adobe Dreamweaver','Both  and B.',4),(30,27,'Which of the following must be installed on your computer so as to run PHP script?','PHP','Apache','Adobe Dreamweaver','Both  and B.',4),(31,27,'Which of the following must be installed on your computer so as to run PHP script?','PHP','Apache','Adobe Dreamweaver','Both  and B.',4),(32,27,'Which version of PHP introduced Try/catch Exception?','PHP 4','PHP 5','PHP 5.3','PHP 6',2),(33,27,'Which version of PHP introduced Try/catch Exception?','PHP 4','PHP 5','PHP 5.3','PHP 6',2),(34,27,'We can use ___ to comment a single line?','#/','??','//','/* */',3),(35,27,'Which of the following php statement/statements will store 111 in variable num?',' int $num = 111;','int mum = 111;','$num = 111;','111 = $num;',3),(36,27,'What will be the output of the following php code?\r\n\r\n    <?php\r\n    $num  = 1;\r\n    $num1 = 2;\r\n    print $num . \"+\". $num1;\r\n    ?>','3','1+2','1. + .2','Error',2),(37,27,'What will be the output of the following php code?\r\n    <?php\r\n    $num  = \"1\";\r\n    $num1 = \"2\";\r\n    print $num+$num1;\r\n    ?>','3','1+2','Error','12',1),(38,28,'What will be the output of the following PHP code?\r\n\r\n    <?php\r\n    $a = 5;\r\n    $b = 5;\r\n    echo ($a === $b);\r\n    ?>','5 === 5','Error','1','False',3),(39,28,'Which of the below symbols is a newline character?','/r','\n','	','/t',2),(40,28,'Which of the conditional statements is/are supported by PHP?','If Statment','If-Else Statment','If-Elseif Statment','All of the mentioned',4),(41,28,'Which of the looping statements is/are supported by PHP?','for loop','while loop','do while loop','All of the mentioned',4),(42,28,'If $a = 12 what will be returned when ($a == 12) ? 5 : 1 is executed?','12','1 ','Error','5',4),(43,28,'If $a = 12 what will be returned when ($a == 12) ? 5 : 1 is executed?','12','1 ','Error','5',4),(44,28,'Who is the father of PHP?','Rasmus Lerdorf','List Barely','Willam Makepiece','Drek Kolkevi',1),(45,29,'php stand for?','pre hyper text','Hypertext Preprocessor','personal home page','all of these',2),(46,29,'What is Default Form Border Style ?','Fixed Single','None','Sizeable','Fixed Diaglog',3),(47,29,'how to use date( ) in mysql ?','now( )','today( )','date( )','time( )',3),(48,29,'Which is not type of Control ?','text','lable','checkbox','option button',1);

/*Table structure for table `ots_result` */

DROP TABLE IF EXISTS `ots_result`;

CREATE TABLE `ots_result` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `login` varchar(20) default NULL,
  `test_id` int(5) default NULL,
  `score` int(3) default NULL,
  `roll_no` varchar(78) default NULL,
  `date` date default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;

/*Data for the table `ots_result` */

insert  into `ots_result`(`id`,`login`,`test_id`,`score`,`roll_no`,`date`) values (47,'abdulmalik',28,4,'2k12/cms/03','2016-01-05'),(49,'abdulmalik',27,4,'2k12/csm/05','2016-01-05'),(50,'Shoukatali',29,3,'2k12/csm/06','2016-01-05'),(51,'abdulmalik',29,3,'2k12/cms/03','2016-01-05'),(52,'abdulkhalique',29,1,'2k12/csm/05','2016-01-05'),(53,'abdulmalik',29,2,'2k12/cms/03','2016-01-06'),(54,'abdulmalik',29,3,'2k12/cms/03','2016-01-06'),(55,'abdulmalik',29,3,'2k12/cms/03','2016-01-06'),(56,'Muhammad Irfan Chand',28,2,'2k12/csc/12','2016-01-06');

/*Table structure for table `ots_subject` */

DROP TABLE IF EXISTS `ots_subject`;

CREATE TABLE `ots_subject` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `sub_name` varchar(25) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

/*Data for the table `ots_subject` */

insert  into `ots_subject`(`id`,`sub_name`) values (13,'PHP'),(14,'web enginneering'),(15,'HTML'),(16,'C LANGUAGE');

/*Table structure for table `ots_test` */

DROP TABLE IF EXISTS `ots_test`;

CREATE TABLE `ots_test` (
  `test_id` int(5) NOT NULL auto_increment,
  `sub_id` int(5) default NULL,
  `test_name` varchar(30) default NULL,
  `total_que` varchar(15) default NULL,
  PRIMARY KEY  (`test_id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

/*Data for the table `ots_test` */

insert  into `ots_test`(`test_id`,`sub_id`,`test_name`,`total_que`) values (27,13,'Basic by Abdul Malik','50'),(28,13,'Advance PHP by Abdul Malik','10'),(29,14,'midterm','5');

/*Table structure for table `ots_useranswer` */

DROP TABLE IF EXISTS `ots_useranswer`;

CREATE TABLE `ots_useranswer` (
  `sess_id` varchar(80) default NULL,
  `test_id` int(11) default NULL,
  `que_des` varchar(200) default NULL,
  `ans1` varchar(50) default NULL,
  `ans2` varchar(50) default NULL,
  `ans3` varchar(50) default NULL,
  `ans4` varchar(50) default NULL,
  `true_ans` int(11) default NULL,
  `your_ans` int(11) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `ots_useranswer` */

insert  into `ots_useranswer`(`sess_id`,`test_id`,`que_des`,`ans1`,`ans2`,`ans3`,`ans4`,`true_ans`,`your_ans`) values ('i38jalqlkc0r5k8jdffkprf676',28,'What will be the output of the following PHP code?\r\n\r\n    <?php\r\n    $a = 5;\r\n    $b = 5;\r\n    echo ($a === $b);\r\n    ?>','5 === 5','Error','1','False',3,3),('i38jalqlkc0r5k8jdffkprf676',28,'Which of the below symbols is a newline character?','/r','\n','	','/t',2,2),('i38jalqlkc0r5k8jdffkprf676',28,'Which of the conditional statements is/are supported by PHP?','If Statment','If-Else Statment','If-Elseif Statment','All of the mentioned',4,4),('i38jalqlkc0r5k8jdffkprf676',28,'Which of the looping statements is/are supported by PHP?','for loop','while loop','do while loop','All of the mentioned',4,4),('i38jalqlkc0r5k8jdffkprf676',28,'If $a = 12 what will be returned when ($a == 12) ? 5 : 1 is executed?','12','1 ','Error','5',4,4),('i38jalqlkc0r5k8jdffkprf676',28,'If $a = 12 what will be returned when ($a == 12) ? 5 : 1 is executed?','12','1 ','Error','5',4,4),('i38jalqlkc0r5k8jdffkprf676',28,'Who is the father of PHP?','Rasmus Lerdorf','List Barely','Willam Makepiece','Drek Kolkevi',1,1),('4i0prp7rqbu65fr6cddt79bp15',27,'What does PHP stand for?','Personal Home Page','Hypertext Preprocessor','Pretext Hypertext Processor','Preprocessor Home Page',2,3),('4i0prp7rqbu65fr6cddt79bp15',27,'PHP files have a default file extension of...',',HTML','.XML','.PHP','.PH',3,3),('4i0prp7rqbu65fr6cddt79bp15',27,'PHP files have a default file extension of...',',HTML','.XML','.PHP','.PH',3,2),('4i0prp7rqbu65fr6cddt79bp15',27,'A PHP script should start with ___ and end with ___.','< php >','<? ?>','<?php ?>','Both B and C.',4,4),('4i0prp7rqbu65fr6cddt79bp15',27,'Which of the following is/are a PHP code editor?','Notepade','Notepade++','Adobe Dreamweaver','All of the mentioned',4,2),('4i0prp7rqbu65fr6cddt79bp15',27,'Which of the following must be installed on your computer so as to run PHP script?','PHP','Apache','Adobe Dreamweaver','Both  and B.',4,2),('4i0prp7rqbu65fr6cddt79bp15',27,'Which of the following must be installed on your computer so as to run PHP script?','PHP','Apache','Adobe Dreamweaver','Both  and B.',4,3),('4i0prp7rqbu65fr6cddt79bp15',27,'Which of the following must be installed on your computer so as to run PHP script?','PHP','Apache','Adobe Dreamweaver','Both  and B.',4,3),('4i0prp7rqbu65fr6cddt79bp15',27,'Which of the following must be installed on your computer so as to run PHP script?','PHP','Apache','Adobe Dreamweaver','Both  and B.',4,3),('4i0prp7rqbu65fr6cddt79bp15',27,'Which of the following must be installed on your computer so as to run PHP script?','PHP','Apache','Adobe Dreamweaver','Both  and B.',4,3),('4i0prp7rqbu65fr6cddt79bp15',27,'Which of the following must be installed on your computer so as to run PHP script?','PHP','Apache','Adobe Dreamweaver','Both  and B.',4,1),('4i0prp7rqbu65fr6cddt79bp15',27,'Which version of PHP introduced Try/catch Exception?','PHP 4','PHP 5','PHP 5.3','PHP 6',2,3),('4i0prp7rqbu65fr6cddt79bp15',27,'Which version of PHP introduced Try/catch Exception?','PHP 4','PHP 5','PHP 5.3','PHP 6',2,3),('4i0prp7rqbu65fr6cddt79bp15',27,'We can use ___ to comment a single line?','#/','??','//','/* */',3,4),('4i0prp7rqbu65fr6cddt79bp15',27,'Which of the following php statement/statements will store 111 in variable num?',' int $num = 111;','int mum = 111;','$num = 111;','111 = $num;',3,3),('4i0prp7rqbu65fr6cddt79bp15',27,'What will be the output of the following php code?\r\n\r\n    <?php\r\n    $num  = 1;\r\n    $num1 = 2;\r\n    print $num . \"+\". $num1;\r\n    ?>','3','1+2','1. + .2','Error',2,2),('4i0prp7rqbu65fr6cddt79bp15',27,'What will be the output of the following php code?\r\n    <?php\r\n    $num  = \"1\";\r\n    $num1 = \"2\";\r\n    print $num+$num1;\r\n    ?>','3','1+2','Error','12',1,3),('ocm5q85a1naridvac3nh9thhr0',28,'What will be the output of the following PHP code?\r\n\r\n    <?php\r\n    $a = 5;\r\n    $b = 5;\r\n    echo ($a === $b);\r\n    ?>','5 === 5','Error','1','False',3,3),('ocm5q85a1naridvac3nh9thhr0',28,'Which of the below symbols is a newline character?','/r','\n','	','/t',2,3),('ocm5q85a1naridvac3nh9thhr0',28,'Which of the conditional statements is/are supported by PHP?','If Statment','If-Else Statment','If-Elseif Statment','All of the mentioned',4,3),('ocm5q85a1naridvac3nh9thhr0',28,'Which of the looping statements is/are supported by PHP?','for loop','while loop','do while loop','All of the mentioned',4,3),('ocm5q85a1naridvac3nh9thhr0',28,'If $a = 12 what will be returned when ($a == 12) ? 5 : 1 is executed?','12','1 ','Error','5',4,3),('ocm5q85a1naridvac3nh9thhr0',28,'If $a = 12 what will be returned when ($a == 12) ? 5 : 1 is executed?','12','1 ','Error','5',4,3),('ocm5q85a1naridvac3nh9thhr0',28,'Who is the father of PHP?','Rasmus Lerdorf','List Barely','Willam Makepiece','Drek Kolkevi',1,3),('fmlnibkhkj0i9tgingp4grlb31',28,'What will be the output of the following PHP code?\r\n\r\n    <?php\r\n    $a = 5;\r\n    $b = 5;\r\n    echo ($a === $b);\r\n    ?>','5 === 5','Error','1','False',3,2),('fmlnibkhkj0i9tgingp4grlb31',28,'Which of the below symbols is a newline character?','/r','\n','	','/t',2,1),('fmlnibkhkj0i9tgingp4grlb31',28,'Which of the conditional statements is/are supported by PHP?','If Statment','If-Else Statment','If-Elseif Statment','All of the mentioned',4,2),('fmlnibkhkj0i9tgingp4grlb31',28,'Which of the looping statements is/are supported by PHP?','for loop','while loop','do while loop','All of the mentioned',4,3),('fmlnibkhkj0i9tgingp4grlb31',28,'If $a = 12 what will be returned when ($a == 12) ? 5 : 1 is executed?','12','1 ','Error','5',4,1),('fmlnibkhkj0i9tgingp4grlb31',28,'If $a = 12 what will be returned when ($a == 12) ? 5 : 1 is executed?','12','1 ','Error','5',4,1),('fmlnibkhkj0i9tgingp4grlb31',28,'Who is the father of PHP?','Rasmus Lerdorf','List Barely','Willam Makepiece','Drek Kolkevi',1,2),('fmlnibkhkj0i9tgingp4grlb31',28,'What will be the output of the following PHP code?\r\n\r\n    <?php\r\n    $a = 5;\r\n    $b = 5;\r\n    echo ($a === $b);\r\n    ?>','5 === 5','Error','1','False',3,2),('fmlnibkhkj0i9tgingp4grlb31',28,'What will be the output of the following PHP code?\r\n\r\n    <?php\r\n    $a = 5;\r\n    $b = 5;\r\n    echo ($a === $b);\r\n    ?>','5 === 5','Error','1','False',3,2),('fmlnibkhkj0i9tgingp4grlb31',28,'What will be the output of the following PHP code?\r\n\r\n    <?php\r\n    $a = 5;\r\n    $b = 5;\r\n    echo ($a === $b);\r\n    ?>','5 === 5','Error','1','False',3,2),('fmlnibkhkj0i9tgingp4grlb31',28,'What will be the output of the following PHP code?\r\n\r\n    <?php\r\n    $a = 5;\r\n    $b = 5;\r\n    echo ($a === $b);\r\n    ?>','5 === 5','Error','1','False',3,2),('lshauph8dtn0l4a0gsjar331m7',28,'What will be the output of the following PHP code?\r\n\r\n    <?php\r\n    $a = 5;\r\n    $b = 5;\r\n    echo ($a === $b);\r\n    ?>','5 === 5','Error','1','False',3,3),('lshauph8dtn0l4a0gsjar331m7',28,'Which of the below symbols is a newline character?','/r','\n','	','/t',2,3),('lshauph8dtn0l4a0gsjar331m7',28,'Which of the conditional statements is/are supported by PHP?','If Statment','If-Else Statment','If-Elseif Statment','All of the mentioned',4,3),('lshauph8dtn0l4a0gsjar331m7',28,'Which of the looping statements is/are supported by PHP?','for loop','while loop','do while loop','All of the mentioned',4,4),('lshauph8dtn0l4a0gsjar331m7',28,'If $a = 12 what will be returned when ($a == 12) ? 5 : 1 is executed?','12','1 ','Error','5',4,4),('lshauph8dtn0l4a0gsjar331m7',28,'If $a = 12 what will be returned when ($a == 12) ? 5 : 1 is executed?','12','1 ','Error','5',4,4),('lshauph8dtn0l4a0gsjar331m7',28,'Who is the father of PHP?','Rasmus Lerdorf','List Barely','Willam Makepiece','Drek Kolkevi',1,4),('77omrk7rf8lhkva6bon1l9jti4',27,'What does PHP stand for?','Personal Home Page','Hypertext Preprocessor','Pretext Hypertext Processor','Preprocessor Home Page',2,1),('77omrk7rf8lhkva6bon1l9jti4',27,'PHP files have a default file extension of...',',HTML','.XML','.PHP','.PH',3,1),('77omrk7rf8lhkva6bon1l9jti4',27,'PHP files have a default file extension of...',',HTML','.XML','.PHP','.PH',3,2),('77omrk7rf8lhkva6bon1l9jti4',27,'A PHP script should start with ___ and end with ___.','< php >','<? ?>','<?php ?>','Both B and C.',4,4),('77omrk7rf8lhkva6bon1l9jti4',27,'Which of the following is/are a PHP code editor?','Notepade','Notepade++','Adobe Dreamweaver','All of the mentioned',4,2),('77omrk7rf8lhkva6bon1l9jti4',27,'Which of the following must be installed on your computer so as to run PHP script?','PHP','Apache','Adobe Dreamweaver','Both  and B.',4,2),('77omrk7rf8lhkva6bon1l9jti4',27,'Which of the following must be installed on your computer so as to run PHP script?','PHP','Apache','Adobe Dreamweaver','Both  and B.',4,2),('77omrk7rf8lhkva6bon1l9jti4',27,'Which of the following must be installed on your computer so as to run PHP script?','PHP','Apache','Adobe Dreamweaver','Both  and B.',4,2),('77omrk7rf8lhkva6bon1l9jti4',27,'Which of the following must be installed on your computer so as to run PHP script?','PHP','Apache','Adobe Dreamweaver','Both  and B.',4,3),('77omrk7rf8lhkva6bon1l9jti4',27,'Which of the following must be installed on your computer so as to run PHP script?','PHP','Apache','Adobe Dreamweaver','Both  and B.',4,2),('77omrk7rf8lhkva6bon1l9jti4',27,'Which of the following must be installed on your computer so as to run PHP script?','PHP','Apache','Adobe Dreamweaver','Both  and B.',4,1),('77omrk7rf8lhkva6bon1l9jti4',27,'Which version of PHP introduced Try/catch Exception?','PHP 4','PHP 5','PHP 5.3','PHP 6',2,2),('77omrk7rf8lhkva6bon1l9jti4',27,'Which version of PHP introduced Try/catch Exception?','PHP 4','PHP 5','PHP 5.3','PHP 6',2,2),('77omrk7rf8lhkva6bon1l9jti4',27,'We can use ___ to comment a single line?','#/','??','//','/* */',3,3),('77omrk7rf8lhkva6bon1l9jti4',27,'Which of the following php statement/statements will store 111 in variable num?',' int $num = 111;','int mum = 111;','$num = 111;','111 = $num;',3,2),('77omrk7rf8lhkva6bon1l9jti4',27,'What will be the output of the following php code?\r\n\r\n    <?php\r\n    $num  = 1;\r\n    $num1 = 2;\r\n    print $num . \"+\". $num1;\r\n    ?>','3','1+2','1. + .2','Error',2,3),('77omrk7rf8lhkva6bon1l9jti4',27,'What will be the output of the following php code?\r\n    <?php\r\n    $num  = \"1\";\r\n    $num1 = \"2\";\r\n    print $num+$num1;\r\n    ?>','3','1+2','Error','12',1,2),('fvnuu2a9mribrjba9d8tdtn6r7',29,'php stand for?','pre hyper text','Hypertext Preprocessor','personal home page','all of these',2,4),('fvnuu2a9mribrjba9d8tdtn6r7',29,'What is Default Form Border Style ?','Fixed Single','None','Sizeable','Fixed Diaglog',3,4),('fvnuu2a9mribrjba9d8tdtn6r7',29,'how to use date( ) in mysql ?','now( )','today( )','date( )','time( )',3,3),('fvnuu2a9mribrjba9d8tdtn6r7',29,'Which is not type of Control ?','text','lable','checkbox','option button',1,2),('tm8egu3h6758nk4f6grfait701',28,'What will be the output of the following PHP code?\r\n\r\n    <?php\r\n    $a = 5;\r\n    $b = 5;\r\n    echo ($a === $b);\r\n    ?>','5 === 5','Error','1','False',3,1),('tm8egu3h6758nk4f6grfait701',28,'Which of the below symbols is a newline character?','/r','\n','	','/t',2,1),('tm8egu3h6758nk4f6grfait701',28,'Which of the conditional statements is/are supported by PHP?','If Statment','If-Else Statment','If-Elseif Statment','All of the mentioned',4,4),('tm8egu3h6758nk4f6grfait701',28,'Which of the looping statements is/are supported by PHP?','for loop','while loop','do while loop','All of the mentioned',4,1),('tm8egu3h6758nk4f6grfait701',28,'If $a = 12 what will be returned when ($a == 12) ? 5 : 1 is executed?','12','1 ','Error','5',4,1),('tm8egu3h6758nk4f6grfait701',28,'If $a = 12 what will be returned when ($a == 12) ? 5 : 1 is executed?','12','1 ','Error','5',4,4),('tm8egu3h6758nk4f6grfait701',28,'Who is the father of PHP?','Rasmus Lerdorf','List Barely','Willam Makepiece','Drek Kolkevi',1,2);

/*Table structure for table `stud_info` */

DROP TABLE IF EXISTS `stud_info`;

CREATE TABLE `stud_info` (
  `id` int(15) NOT NULL auto_increment,
  `login` varchar(40) default NULL,
  `roll_no` varchar(20) default NULL,
  `pass` varchar(40) default NULL,
  `username` varchar(50) default NULL,
  `address` varchar(80) default NULL,
  `city` varchar(40) default NULL,
  `phone` varchar(50) default NULL,
  `email` varchar(50) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `stud_info` */

insert  into `stud_info`(`id`,`login`,`roll_no`,`pass`,`username`,`address`,`city`,`phone`,`email`) values (6,'irfanali12','2k12/csc/12','123','Muhammad Irfan Chand','HCB 2220 Near Makki Shah Kacha Kila,Hyderabad','Hyderabad','03003322110','irfanchand94@yahoo.com'),(7,'kazim','2k12/csm/44','123','Kazim Ali','Hyderabad','hyderabad','03003322110','kazimkorejo@gmail.com'),(8,'amalik','2k12/cms/03','1234','abdulmalik','hyderabad','Hyderabad','03429301903','amaliksamejo@gmail.com'),(9,'akhalique','2k12/csm/05','1234','abdulkhalique','hyderabad','hyderabad','03429301903','amalik_samejo@hotmail.com'),(10,'shoukat','2k12/csm/06','1234','Shoukatali','hyderabad','hyderabad','03429301903','amalik_samejo@hotmail.com'),(11,'haque','2k12/csm/8','1234','haque Nawaz','hyd','hyderabad','03429301903','amaliksamejo@gmail.com');

/*Table structure for table `teacher_reg` */

DROP TABLE IF EXISTS `teacher_reg`;

CREATE TABLE `teacher_reg` (
  `id` int(10) NOT NULL auto_increment,
  `Name` varchar(30) default NULL,
  `Subject` varchar(30) default NULL,
  `UserID` varchar(20) default NULL,
  `Password` varchar(30) default NULL,
  `Address` varchar(50) default NULL,
  `phone` varchar(15) default NULL,
  `email` varchar(50) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `teacher_reg` */

insert  into `teacher_reg`(`id`,`Name`,`Subject`,`UserID`,`Password`,`Address`,`phone`,`email`) values (5,'Abdul Malik Samejo','php','amalik12','1234','Memon Nagar,Qasimabad,Hyderabad.','03429301903','amaliksamejo@gmail.com'),(9,'kamran Brohi','web Engineering','kamran','12345','university of sindh','03008370101','amaliksamejo@gmail.com'),(10,'hizbullah','java','hizb','hizb','b-69 qasimabad','03063364920','hizbullahsimair@gmail.com');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
