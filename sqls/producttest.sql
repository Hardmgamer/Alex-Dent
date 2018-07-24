/*
SQLyog Community v12.5.1 (64 bit)
MySQL - 10.1.16-MariaDB : Database - alexdent
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`alexdent` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `products` */

insert  into `products`(`id`,`name`,`availability`,`image`,`image2`,`image3`,`description`,`overview`,`specs`) values 
(1,'Test 2',1,'./images/products/2.jpg','./images/products/1.jpg','./images/products/3.jpg','Lorem Ipsum','Lorem Ipsum','Lorem Ipsum'),
(2,'Test',1,'./images/products/1.jpg','./images/products/2.jpg','./images/products/3.jpg','Lorem Ipsum','Lorem Ipsum','Lorem Ipsum');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
