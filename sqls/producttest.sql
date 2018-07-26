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

/*Table structure for table `header` */

DROP TABLE IF EXISTS `header`;

CREATE TABLE `header` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(255) DEFAULT NULL,
  `link` char(255) DEFAULT NULL,
  `branch1` char(255) DEFAULT NULL,
  `branch2` char(255) DEFAULT NULL,
  `branch3` char(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `header` */

insert  into `header`(`id`,`name`,`link`,`branch1`,`branch2`,`branch3`) values 
(1,'1','2','2','3','4'),
(2,'2','3','4','5',NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `products` */

insert  into `products`(`id`,`name`,`availability`,`image`,`image2`,`image3`,`description`,`overview`,`specs`,`company`) values 
(1,'WATER',2,'./Images/products/1.jpg','','','','','','WATER'),
(2,'Oil',2,'./images/products/2.jpg','','','','','','oil'),
(4,'Milk',1,'./IMAGES/PRODUCTS/4.JPG','','','this is milk','THIS IS MILK','HEHE','cow'),
(5,'Rise',1,'./IMAGES/PRODUCTS/3.JPG','','','This is Rise','Best healthy food in egypt','Price: Cheap,Size: Large,','Egypt foods');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
