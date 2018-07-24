/*
SQLyog Community v13.0.0 (64 bit)
MySQL - 10.1.31-MariaDB : Database - alexdent
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`alexdent` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `alexdent`;

/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `availability` int(1) DEFAULT '1',
  `image` char(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image2` char(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image3` char(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` char(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `overview` char(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `specs` char(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company` char(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `products` */

insert  into `products`(`id`,`name`,`availability`,`image`,`image2`,`image3`,`description`,`overview`,`specs`,`company`) values 
(5,'test',0,'','','','test 2','salah is the best','5','Salah'),
(6,'test2',1,'','','','test2','TEST','1','saalaah'),
(7,'test2',2,'','','','test2','TEST','1','saalaah'),
(13,'ddddd',1,'','','','ddddd','asassa','323','ksmk');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
