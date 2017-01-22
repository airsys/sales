/*
SQLyog Ultimate v11.11 (32 bit)
MySQL - 5.6.21 : Database - db_master
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_master` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_master`;

/*Table structure for table `ms_customer` */

DROP TABLE IF EXISTS `ms_customer`;

CREATE TABLE `ms_customer` (
  `ID_CUSTOMER` int(1) NOT NULL AUTO_INCREMENT,
  `BRANDNAME` varchar(100) DEFAULT NULL,
  `CONTACTNAME` varchar(50) DEFAULT NULL,
  `ALAMAT` tinytext,
  `GROUPBRAND` varchar(50) DEFAULT NULL,
  `NOTES` tinytext,
  `WEBSITE` varchar(100) DEFAULT NULL,
  `SOSMED` varchar(100) DEFAULT NULL,
  `STATUS_CUSTOMER` int(1) DEFAULT '0',
  PRIMARY KEY (`ID_CUSTOMER`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `ms_customer` */

insert  into `ms_customer`(`ID_CUSTOMER`,`BRANDNAME`,`CONTACTNAME`,`ALAMAT`,`GROUPBRAND`,`NOTES`,`WEBSITE`,`SOSMED`,`STATUS_CUSTOMER`) values (1,'Hasan s','Hasan s','oke s','dicoba s','testing s',NULL,NULL,1),(2,'Joni Abdul','Sueb','Jl kali kepiting 1 No.12 Surabaya','Handuk Putih','-',NULL,NULL,0),(3,'testing','testing','coba','test','oke',NULL,NULL,0),(4,'sueb travel','sueb','Jl Biduan No.15 Surabaya.','Google','-','suebtravel.com','suebxxx',0),(5,'Abdultravel','Abdullah','Jl Ketapang No.01 Jombang','Ticket','','','abdulltravel',0);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
