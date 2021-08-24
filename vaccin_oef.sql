-- -------------------------------------------------------------
-- TablePlus 4.1.0(376)
--
-- https://tableplus.com/
--
-- Database: vaccin_oef
-- Generation Time: 2021-08-24 18:14:18.2980
-- -------------------------------------------------------------


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


DROP TABLE IF EXISTS `center`;
CREATE TABLE `center` (
  `center_id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `street` varchar(100) DEFAULT NULL,
  `nr` varchar(20) DEFAULT NULL,
  `postalcode` int DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `lat` float DEFAULT NULL,
  `long` float DEFAULT NULL,
  `pdf` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`center_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `user_id` int unsigned NOT NULL AUTO_INCREMENT,
  `center_id` int DEFAULT NULL,
  `name` varchar(256) DEFAULT NULL,
  `email` varchar(256) DEFAULT NULL,
  `password` varchar(256) DEFAULT NULL,
  `creation_date` datetime DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `vaccin`;
CREATE TABLE `vaccin` (
  `vaccin_id` int unsigned NOT NULL AUTO_INCREMENT,
  `center_id` int DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `available` datetime DEFAULT NULL,
  `certificaat` varchar(256) DEFAULT NULL,
  `status` int DEFAULT NULL,
  `claimer` varchar(256) DEFAULT NULL,
  `email` varchar(256) DEFAULT NULL,
  `phone` varchar(256) DEFAULT NULL,
  `rijksregisternr` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`vaccin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

INSERT INTO `center` (`center_id`, `name`, `street`, `nr`, `postalcode`, `city`, `lat`, `long`, `pdf`) VALUES
(1, 'Brielpoort', 'Lucien Matthyslaan', '9', 9800, 'Deinze', NULL, NULL, '612502043834a.pdf'),
(2, 'Sporthal Nazareth', 'Drapstraat', '76', 8910, 'Nazareth', NULL, NULL, NULL),
(3, 'Hal 7, Flanders Expo', 'Maaltekouter', '1', 9051, 'Gent', NULL, NULL, NULL);

INSERT INTO `user` (`user_id`, `center_id`, `name`, `email`, `password`, `creation_date`) VALUES
(1, 1, 'Dr Deinze', 'drdeinze@corona.be', '$2y$10$Y4nCAM9gvwtm7ecH6Oe2BOsnjpG3HTQnw2eXj/5ZwRbgfCjZjg8nG', '2021-01-13 15:22:21');

INSERT INTO `vaccin` (`vaccin_id`, `center_id`, `user_id`, `date`, `available`, `certificaat`, `status`, `claimer`, `email`, `phone`, `rijksregisternr`) VALUES
(1, 1, NULL, '2021-01-12 17:21:22', '2021-01-12 18:00:00', NULL, 1, 'testfref', 'test@hjhj.ipez', '78702', '52752524'),
(2, 1, NULL, '2021-01-12 17:21:22', '2021-01-12 18:00:00', NULL, 0, NULL, NULL, NULL, NULL),
(3, 1, NULL, '2021-01-12 17:21:22', '2021-01-12 18:00:00', NULL, 0, NULL, NULL, NULL, NULL),
(4, 1, NULL, '2021-01-12 17:21:22', '2021-01-12 18:00:00', NULL, 0, NULL, NULL, NULL, NULL),
(5, 2, NULL, '2021-01-12 17:23:12', '2021-01-12 19:00:00', NULL, 1, 'Test', 'test@test.be', '673792', '780238'),
(6, 2, NULL, '2021-01-12 17:23:12', '2021-01-12 19:00:00', NULL, 0, NULL, NULL, NULL, NULL),
(7, 2, NULL, '2021-01-13 11:21:22', '2021-01-15 18:00:00', NULL, 1, 'dzedzd', 'ezd@deed.bde', '67793', '6806'),
(8, 1, NULL, '2021-01-13 11:21:22', '2021-01-15 18:00:00', NULL, 1, 'Dieter De Weirdt', 'dieter@deweirdt.be', '123456789', NULL),
(9, 1, NULL, '2021-01-13 11:21:22', '2021-01-15 18:00:00', NULL, 0, '', '', '', NULL),
(10, 1, NULL, '2021-01-13 11:21:22', '2021-01-15 18:00:00', NULL, 0, '', '', '', ''),
(11, 1, NULL, '2021-01-13 11:21:22', '2021-01-15 18:00:00', NULL, 1, 'deazd', 'zdh@iip.be', '780', '68686');



/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;