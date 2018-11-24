/*
SQLyog Community v13.0.1 (64 bit)
MySQL - 10.1.26-MariaDB : Database - apgt1743_green
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`apgt1743_green` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `apgt1743_green`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(20) DEFAULT NULL,
  `Name` varchar(200) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `PasswordTxt` varchar(255) DEFAULT NULL,
  `LastLogin` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert  into `admin`(`ID`,`Username`,`Name`,`Password`,`PasswordTxt`,`LastLogin`) values 
(1,'Admin','Rifai','7cf6ca99540d171dc10a791a339a0536','toor123',NULL),
(2,'ndang','Nandang','202cb962ac59075b964b07152d234b70','123',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
