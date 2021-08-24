# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.29)
# Database: vaccine_plus
# Generation Time: 2021-01-13 16:40:16 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table center
# ------------------------------------------------------------

DROP TABLE IF EXISTS `center`;

CREATE TABLE `center` (
  `center_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `street` varchar(100) DEFAULT NULL,
  `nr` varchar(20) DEFAULT NULL,
  `postalcode` int(4) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `lat` float DEFAULT NULL,
  `long` float DEFAULT NULL,
  PRIMARY KEY (`center_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `center` (`center_id`, `name`, `street`, `nr`, `postalcode`, `city`, `lat`, `long`)
VALUES
	(1,'Brielpoort','Lucien Matthyslaan','9',9800,'Deinze',NULL,NULL),
	(2,'Sporthal Nazareth','Drapstraat','76',8910,'Nazareth',NULL,NULL),
	(3,'Hal 7, Flanders Expo','Maaltekouter','1',9051,'Gent',NULL,NULL);


# Dump of table user
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `user_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `center_id` int(11) DEFAULT NULL,
  `name` varchar(256) DEFAULT NULL,
  `email` varchar(256) DEFAULT NULL,
  `password` varchar(256) DEFAULT NULL,
  `creation_date` datetime DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `user` (`user_id`, `center_id`, `name`, `email`, `password`, `creation_date`)
VALUES
	(1,1,'Dr Deinze','drdeinze@corona.be','$2y$10$Y4nCAM9gvwtm7ecH6Oe2BOsnjpG3HTQnw2eXj/5ZwRbgfCjZjg8nG','2021-01-13 15:22:21');



# Dump of table vaccin
# ------------------------------------------------------------

DROP TABLE IF EXISTS `vaccin`;

CREATE TABLE `vaccin` (
  `vaccin_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `center_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `available` datetime DEFAULT NULL,
  `certificaat` varchar(256) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `claimer` varchar(256) DEFAULT NULL,
  `email` varchar(256) DEFAULT NULL,
  `phone` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`vaccin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `vaccin` (`vaccin_id`, `center_id`, `user_id`, `date`, `available`, `certificaat`, `status`, `claimer`, `email`, `phone`)
VALUES
	(1,1,NULL,'2021-01-12 17:21:22','2021-01-12 18:00:00',NULL,0,NULL,NULL,NULL),
	(2,1,NULL,'2021-01-12 17:21:22','2021-01-12 18:00:00',NULL,0,NULL,NULL,NULL),
	(3,1,NULL,'2021-01-12 17:21:22','2021-01-12 18:00:00',NULL,0,NULL,NULL,NULL),
	(4,1,NULL,'2021-01-12 17:21:22','2021-01-12 18:00:00',NULL,0,NULL,NULL,NULL),
	(5,2,NULL,'2021-01-12 17:23:12','2021-01-12 19:00:00',NULL,0,NULL,NULL,NULL),
	(6,2,NULL,'2021-01-12 17:23:12','2021-01-12 19:00:00',NULL,0,NULL,NULL,NULL),
	(7,2,NULL,'2021-01-13 11:21:22','2021-01-15 18:00:00',NULL,0,NULL,NULL,NULL),
	(8,1,NULL,'2021-01-13 11:21:22','2021-01-15 18:00:00',NULL,1,'Dieter De Weirdt','dieter@deweirdt.be','123456789'),
	(9,1,NULL,'2021-01-13 11:21:22','2021-01-15 18:00:00',NULL,0,'','',''),
	(10,1,NULL,'2021-01-13 11:21:22','2021-01-15 18:00:00',NULL,0,'','',''),
	(11,1,NULL,'2021-01-13 11:21:22','2021-01-15 18:00:00',NULL,0,'','','');


/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
